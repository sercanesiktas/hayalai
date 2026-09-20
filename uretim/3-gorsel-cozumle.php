<?php

/* Kart önizlemesi uygulamanın kendi temizleyicisinden geçiyor:
   JSON parantezleri, kod çitleri ve harfi harfine yazılmış "\n"
   kaçışları karta düşmesin. Aynı kural canlıdaki düzeltme komutunda
   da kullanılıyor — iki yerde iki farklı kural olmasın. */
require_once __DIR__.'/Onizleme.php';
/**
 * ai-image-prompts-skill (MIT) kataloğunu HayalAI satırlarına çevirir.
 *
 *   php database/acik-katalog/3-gorsel-cozumle.php /cikti /depo/references
 *
 * MIT, CC0'DAN FARKLI: ticari kullanıma açık ama ATIF ZORUNLU. Bu yüzden
 * her promptun açıklamasına kaynak ve lisans yazılıyor, LICENSE metni de
 * pakete konuyor.
 */
require __DIR__ . '/gorsel-yardimcilar.php';

$cikti = rtrim($argv[1] ?? getcwd(), '/');
$kaynak = rtrim($argv[2] ?? '', '/');

if (! is_dir($kaynak)) {
    fwrite(STDERR, "Kaynak klasör yok: {$kaynak}\n");
    exit(1);
}

/* --- İÇERİK SÜZGECİ ---------------------------------------------------
   Pazaryeri herkese açık; müstehcen prompt istemiyoruz. Ama basit bir
   kelime taraması FELAKET veriyordu: "nude lipstick" (ruj rengi),
   "nude tone nails" ve özellikle JSON'daki `negative_prompt: [nudity,
   nipples]` — yani promptun KAÇINMAK İSTEDİĞİ şeyler — masum promptları
   eliyordu. Ölçüldü: kaba süzgeç 951 prompt atıyordu, bağlama duyarlı
   olan 64.

   Üç ayrım yapılıyor:
     1. Kozmetik anlam  → "nude lipstick" çıplaklık değil, renk adı.
     2. Yakın olumsuzlama → "no nudity", "without nudity".
     3. Yapısal olumsuzlama → negative_prompt / avoid listeleri; bunlar
        uzun olduğu için işaret 220 karakter öncesine kadar aranıyor.

   Kesin değil, KELİME TARAMASI. Kalanın tamamen temiz olduğu garanti
   edilemez; yönetici panelinden tek tek kaldırılabilir. */
$KOZMETIK = '/\bnude[- ]?(lip|lips|lipstick|tone|toned|tones|pink|beige|colou?r|colou?red|'
          . 'gradient|background|nail|nails|polish|makeup|matte|shade|palette|heel|heels|dress)\b/i';
$YAKIN    = '/\b(no|not|without|avoid|avoiding|exclude|excluding|never|non[- ]?|anti[- ]?|'
          . 'free of|sfw|prohibit|prohibited|forbidden)\b\W{0,30}$/i';
$YAPISAL  = '/(negative[_ ]?prompt|"avoid"|\bavoid\b|\bexclude\b|do not|don\'t|must not|'
          . 'should not|no\s)[^"]{0,220}$/i';
$ACIK     = '/\b(nsfw|porn|pornographic|hentai|topless|bare breasts?|nipples?|'
          . 'fully nude|completely nude|standing nude|posing nude|nude (?:woman|man|body|figure|model)|'
          . 'naked (?:woman|man|body|girl|boy)|erotic|explicit sexual|sexually explicit)\b/i';

$uygunsuz = function (string $metin) use ($KOZMETIK, $YAKIN, $YAPISAL, $ACIK): bool {
    if (! preg_match_all($ACIK, $metin, $m, PREG_OFFSET_CAPTURE)) {
        return false;
    }
    foreach ($m[0] as [$kelime, $konum]) {
        $yakin = substr($metin, max(0, $konum - 40), min(40, $konum));
        $genis = substr($metin, max(0, $konum - 220), min(220, $konum));
        if (preg_match($YAKIN, $yakin) || preg_match($YAPISAL, $genis)) {
            continue;
        }
        if (preg_match($KOZMETIK, substr($metin, $konum, 40))) {
            continue;
        }

        return true;
    }

    return false;
};

function kirp(string $s, int $n): string {
    $s = trim(preg_replace('/\s+/u', ' ', $s));
    return mb_strlen($s) <= $n ? $s : mb_substr($s, 0, $n - 1) . '…';
}

/* Dosya adı → sitedeki iş etiketi. Hepsi "görsel" kategorisinde ama
   hangi işe yaradığı başlıkta kayboluyordu. */
$etiketler = [
    'app-web-design'        => 'Arayüz ve web tasarımı',
    'comic-storyboard'      => 'Çizgi roman ve storyboard',
    'ecommerce-main-image'  => 'E-ticaret ürün görseli',
    'game-asset'            => 'Oyun görseli',
    'infographic-edu-visual'=> 'Bilgi grafiği ve eğitim görseli',
    'others'                => 'Genel',
    'poster-flyer'          => 'Afiş ve broşür',
    'product-marketing'     => 'Ürün pazarlama görseli',
    'profile-avatar'        => 'Profil fotoğrafı ve avatar',
    'social-media-post'     => 'Sosyal medya gönderisi',
    'youtube-thumbnail'     => 'YouTube küçük resmi',
];

$satirlar = [];
$gorulen  = [];
$sayac    = ['okunan' => 0, 'mukerrer' => 0, 'uygunsuz' => 0, 'uzun' => 0, 'bos' => 0];

foreach (glob("{$kaynak}/*.json") as $dosya) {
    $ad = basename($dosya, '.json');
    if ($ad === 'manifest') {
        continue;
    }

    $veri = json_decode((string) file_get_contents($dosya), true);
    if (! is_array($veri)) {
        continue;
    }

    foreach ($veri as $x) {
        $sayac['okunan']++;

        $baslik = kirp((string) ($x['title'] ?? ''), 160);
        $metin  = rtrim((string) ($x['content'] ?? ''));

        if ($baslik === '' || $metin === '') { $sayac['bos']++; continue; }

        // prompt_text bir TEXT sütunu: 65.535 bayt. MySQL aşanı uyarı
        // vermeden kırpıyor, yarım prompt yayınlamaktansa alınmıyor.
        if (strlen($metin) > 65000) { $sayac['uzun']++; continue; }

        if ($uygunsuz($baslik . "\n" . $metin)) { $sayac['uygunsuz']++; continue; }

        $anahtar = mb_strtolower($baslik);
        if (isset($gorulen[$anahtar])) { $sayac['mukerrer']++; continue; }
        $gorulen[$anahtar] = true;

        /* REFERANS GÖRSEL İSTEYEN PROMPTLAR AYRI. Bunlar yüklenen bir
           fotoğraf üzerinde çalışıyor; sıfırdan üretimle örneklenemez ve
           alıcı da bunu baştan bilmeli. */
        $referansli = ! empty($x['needReferenceImages']);

        /* AÇIKLAMA TÜRKÇE ÜRETİLİYOR, ÇEVRİLMİYOR. Kaynak açıklamalar
           İngilizce; birebir çeviri hem mümkün değil (buradan çeviri
           servisine ulaşılamıyor) hem de "A prompt for generating…"
           kalıbı Türkçede kötü duruyor. Bunun yerine promptun kendi
           metninden ne ürettiği ve hangi üslupta olduğu okunup Türkçe
           cümle kuruluyor. */
        $okunacak = $baslik . ' ' . ((string) ($x['description'] ?? '')) . ' ' . mb_substr($metin, 0, 1500);
        $tanim    = turkceTanim($okunacak);

        /* KAYNAK DOSYA ADINA GÖRE ETİKET KULLANILMIYOR. Kaynak veri
           kendi gruplamasında tutarsız: "Ancient Egyptian Print
           Illustration" promptu app-web-design.json içinde duruyor ve
           etiket "Arayüz ve web tasarımı" çıkıyordu — açıkça yanlış.
           İçerikten türeyen tanım hem doğru hem daha bilgilendirici,
           yanlış bir etiketle onu bulandırmanın anlamı yok. */
        $aciklama = mb_convert_case(mb_substr($tanim, 0, 1), MB_CASE_UPPER, 'UTF-8')
                  . mb_substr($tanim, 1) . ' üretmek için hazır prompt.'
                  . ($referansli
                        ? ' Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister.'
                        : ' Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez.')
                  /* KAYNAK/LİSANS SATIRI YOK. MIT'in atıf şartı dağıtımla
                     gelen lisans dosyasıyla karşılanıyor
                     (database/LISANS-gorsel-katalog.txt); 15 bin ilanın
                     açıklamasında depo adı tekrarlamak alıcıya hiçbir
                     şey anlatmıyordu.

                     Sondaki "Hazır katalog promptu." ETİKETİ KALIYOR:
                     hem doğru bilgi (satıcının kendi yazdığı ilan
                     değil) hem de geri alma sorgusunun tutunacağı tek
                     işaret — o olmadan bu içe aktarmayı geri almak
                     mümkün olmazdı. */
                  . ' Prompt metni İngilizce. Hazır katalog promptu.';

        $satirlar[] = [
            'kat'      => 'gorsel',
            'tur'      => 'image',
            /* "Fark etmez / diğer" KULLANILMIYOR: o seçenekte prompt
               detayında hiçbir "şurada dene" düğmesi basılmıyor ve
               kullanıcı promptu nereye götüreceğini bilemiyordu. */
            'arac'     => aracSec($okunacak),
            'baslik'   => $baslik,
            'aciklama' => kirp($aciklama, 500),
            'onizleme' => Onizleme::temizle($metin),
            'metin'    => $metin,
            'referansli' => $referansli,
        ];
    }
}

fwrite(STDERR, "okunan {$sayac['okunan']} · alınan " . count($satirlar)
    . " · mükerrer {$sayac['mukerrer']} · uygunsuz {$sayac['uygunsuz']}"
    . " · çok uzun {$sayac['uzun']} · boş {$sayac['bos']}\n");
$ref = count(array_filter($satirlar, fn ($s) => $s['referansli']));
fwrite(STDERR, "bunlardan referans görsel isteyen: {$ref}\n");

file_put_contents("{$cikti}/gorsel-satirlar.json", json_encode($satirlar, JSON_UNESCAPED_UNICODE));

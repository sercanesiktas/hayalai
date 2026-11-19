<?php

/*
 * Görsel prompt kataloğunu (YouMind-OpenLab/ai-image-prompts-skill, MIT)
 * satırlara çevirir.
 *
 *   php 3-gorsel-cozumle.php <cikti-klasoru> <katalog>/references
 *
 * Çıktı: <cikti-klasoru>/gorsel-satirlar.json
 *
 * MIT atıf istiyor: kaynağın lisans metni LISANS-KAYNAKLAR.md içinde.
 */

require __DIR__ . '/gorsel-yardimcilar.php';

$cikti = rtrim($argv[1] ?? getcwd(), '/');
$kaynak = rtrim($argv[2] ?? '', '/');

if (! is_dir($kaynak)) {
    fwrite(STDERR, "Kaynak klasör yok: {$kaynak}\n");
    exit(1);
}

/*
 * Müstehcen içerik süzgeci. Düz kelime taraması 951 promptu eliyordu,
 * çünkü "nude lipstick" (ruj rengi), "nude tone nails" ve JSON içindeki
 * `negative_prompt: [nudity, nipples]` gibi kaçınılan şeyler de
 * yakalanıyordu. Bağlama bakan sürüm 64 tane eliyor. Üç istisna var:
 *   1. kozmetik anlam: "nude lipstick" bir renk adı
 *   2. yakın olumsuzlama: "no nudity", "without nudity"
 *   3. yapısal olumsuzlama: negative_prompt / avoid listeleri (220 karakter geriye bakıyor)
 * Bu yine de kelime taraması, kalanın tamamen temiz olduğunu iddia etmiyoruz.
 */
$KOZMETIK = '/\bnude[- ]?(lip|lips|lipstick|tone|toned|tones|pink|beige|colou?r|colou?red|'
          . 'gradient|background|nail|nails|polish|makeup|matte|shade|palette|heel|heels|dress)\b/i';
$YAKIN    = '/\b(no|not|without|avoid|avoiding|exclude|excluding|never|non[- ]?|anti[- ]?|'
          . 'free of|sfw|prohibit|prohibited|forbidden)\b\W{0,30}$/i';
$YAPISAL  = '/(negative[_ ]?prompt|"avoid"|\bavoid\b|\bexclude\b|do not|don\'t|must not|'
          . 'should not|\bno\s)[^"]{0,220}$/i';
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

$satirlar = [];
$gorulen = [];
$sayac = ['okunan' => 0, 'mukerrer' => 0, 'uygunsuz' => 0, 'uzun' => 0, 'bos' => 0];

$dosyalar = glob("{$kaynak}/*.json");
sort($dosyalar);

foreach ($dosyalar as $dosya) {
    if (basename($dosya, '.json') === 'manifest') {
        continue;
    }

    $veri = json_decode((string) file_get_contents($dosya), true);
    if (! is_array($veri)) {
        continue;
    }

    foreach ($veri as $x) {
        $sayac['okunan']++;

        $baslik = kirp((string) ($x['title'] ?? ''), 160);
        $metin = rtrim((string) ($x['content'] ?? ''));

        if ($baslik === '' || $metin === '') {
            $sayac['bos']++;
            continue;
        }

        // 65.535 baytı aşan prompt MySQL TEXT'te sessizce kırpılıyor
        if (strlen($metin) > 65000) {
            $sayac['uzun']++;
            continue;
        }

        if ($uygunsuz($baslik . "\n" . $metin)) {
            $sayac['uygunsuz']++;
            continue;
        }

        $anahtar = mb_strtolower($baslik);
        if (isset($gorulen[$anahtar])) {
            $sayac['mukerrer']++;
            continue;
        }
        $gorulen[$anahtar] = true;

        // referans görsel isteyen promptlar yüklenen bir fotoğraf üzerinde
        // çalışıyor, sıfırdan üretimle denenemez
        $referansli = ! empty($x['needReferenceImages']);

        $okunacak = $baslik . ' ' . ((string) ($x['description'] ?? '')) . ' ' . mb_substr($metin, 0, 1500);
        $tanim = turkceTanim($okunacak);

        // Kaynak dosya adı etiket olarak kullanılmıyor: kaynakta gruplama
        // tutarsız ("Ancient Egyptian Print Illustration" app-web-design.json
        // içinde duruyor). İçerikten çıkan tanım daha doğru.
        $aciklama = ilkHarfBuyuk($tanim) . ' üretmek için hazır prompt.'
            . ($referansli
                ? ' Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister.'
                : ' Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez.')
            . ' Prompt metni İngilizce. Hazır katalog promptu.';

        $satirlar[] = [
            'kat'        => 'gorsel',
            'tur'        => 'image',
            'arac'       => aracSec($okunacak),
            'baslik'     => $baslik,
            'aciklama'   => kirp($aciklama, 500),
            'metin'      => $metin,
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

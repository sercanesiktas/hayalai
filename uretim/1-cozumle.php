<?php

/* Kart önizlemesi uygulamanın kendi temizleyicisinden geçiyor:
   JSON parantezleri, kod çitleri ve harfi harfine yazılmış "\n"
   kaçışları karta düşmesin. Aynı kural canlıdaki düzeltme komutunda
   da kullanılıyor — iki yerde iki farklı kural olmasın. */
require_once __DIR__.'/Onizleme.php';
/* prompts.chat (CC0) kataloğunu HayalAI prompts tablosuna çeviren SQL üretici. */

require __DIR__ . '/gorsel-yardimcilar.php';

$SCR = rtrim($argv[1] ?? getcwd(), '/');
$h = fopen($argv[2] ?? "$SCR/prompts.csv", 'r');
$bas = fgetcsv($h, 0, ',', '"', '');   // escape='' — RFC 4180, ters bölü kaçışı YOK

/* Kategori seçimi: önce tür, sonra for_devs, sonra anahtar kelime.
   Sıra önemli — ilk tutan kazanıyor. */
$anahtarlar = [
    'web'       => ['website', 'web page', 'web app', 'landing page', 'html', 'css', 'frontend',
                    'react', 'wordpress', 'seo', 'javascript', 'web developer', 'web development'],
    'tasarim'   => ['ui designer', 'ux', 'logo', 'typography', 'color palette', 'figma',
                    'interface designer', 'graphic design', 'web design', 'product design'],
    'pazarlama' => ['advertiser', 'advertising', 'marketing', 'copywriter', 'salesperson', 'branding',
                    'social media', 'campaign', 'e-commerce', 'ecommerce'],
    'ses'       => ['music', 'song', 'audio', 'podcast', 'voice', 'rapper', 'composer',
                    'lyrics', 'lyricist', 'sound'],
    'video'     => ['video', 'youtube', 'screenplay', 'cinematographer', 'movie script',
                    'film director', 'short film'],
    'mobil'     => ['mobile app', 'android', 'ios app', 'flutter', 'react native', 'app developer'],
];

function kategoriSec(array $x, array $anahtarlar): string {
    if (($x['type'] ?? '') === 'IMAGE')      return 'gorsel';
    if (($x['for_devs'] ?? '') === 'TRUE')   return 'kod';
    /* YALNIZCA BAŞLIK. Gövdede aramak felakete yol açıyordu: "Florist"
       promptunun metninde 'design' geçtiği için tasarıma, "Chemical
       Reactor" gövdesinde 'html' geçtiği için web'e düşüyordu. Başlık,
       promptun ne olduğunu söyleyen tek güvenilir alan. */
    $ad = mb_strtolower($x['act']);
    foreach ($anahtarlar as $kat => $kelimeler) {
        foreach ($kelimeler as $k) {
            if (preg_match('/\\b' . preg_quote($k, '/') . '\\b/u', $ad)) return $kat;
        }
    }
    return 'metin';
}

function kirp(string $s, int $n): string {
    $s = trim(preg_replace('/\s+/u', ' ', $s));
    return mb_strlen($s) <= $n ? $s : mb_substr($s, 0, $n - 1) . '…';
}

$satirlar = [];
$atlanan  = [];
$dagilim  = [];
$gorulen  = [];
while (($r = fgetcsv($h, 0, ',', '"', '')) !== false) {
    if (count($r) < 2) continue;
    $x = array_combine(array_slice($bas, 0, count($r)), $r);
    if (trim($x['act'] ?? '') === '' || trim($x['prompt'] ?? '') === '') continue;

    $baslik = kirp($x['act'], 160);
    // Aynı başlık iki kez gelirse ikincisini atla: sitede başlık benzersiz varsayılıyor.
    $anahtar = mb_strtolower($baslik);
    if (isset($gorulen[$anahtar])) continue;
    $gorulen[$anahtar] = true;

    $kat = kategoriSec($x, $anahtarlar);
    $tur = ($x['type'] ?? '') === 'IMAGE' ? 'image' : 'text';
    /* "Fark etmez / diğer" KULLANILMIYOR. O seçenekte prompt
       detayında hiçbir "şurada dene" düğmesi basılmıyor; kullanıcı
       promptu alıp nereye götüreceğini bilmeden kalıyordu. Görsel
       promptlarda metinde adı geçen araç varsa o seçiliyor, yoksa
       ChatGPT (bkz. gorsel-yardimcilar.php). */
    $arac = $tur === 'image'
        ? aracSec($baslik . ' ' . mb_substr($x['prompt'], 0, 1500))
        : 'chatgpt';

    /* KAYNAK/LİSANS SATIRI YOK. Bu promptlar CC0, yani atıf zaten
       şart değil; 2 binden fazla ilanın açıklamasında depo adı
       tekrarlamak alıcıya hiçbir şey anlatmıyordu. Sondaki "Hazır
       katalog promptu." etiketi kalıyor: hem doğru bilgi (satıcının
       kendi yazdığı ilan değil) hem de geri alma sorgusunun tutunacağı
       tek işaret. */
    /* AÇIKLAMA PROMPTUN NE YAPTIĞINI SÖYLEMELİ.
       Önce şöyleydi: "X rolünü üstlenen prompt. Sohbet asistanlarına
       verilmek üzere yazılmış." Bu cümle her promptta aynıydı, üstelik
       başlığı tekrar ediyordu — alıcı promptun ne işe yaradığını
       açıklamadan öğrenemiyordu.

       Artık görev ve alan promptun KENDİ METNİNDEN okunuyor
       (bkz. metinGorevi / metinAlani). Çeviri değil, çıkarım: bu
       ortamdan çeviri servisine ulaşılamıyor ve kaynak açıklamaların
       birebir çevirisi Türkçede zaten kötü duruyordu. */
    $okunacak = $baslik . ' ' . mb_substr($x['prompt'], 0, 2000);
    /* ALAN ETİKETİ KULLANILMIYOR. Denendi ve ölçüldü: güvenle yanlış
       etiket üretiyordu. "Ethereum Developer" promptu metninde "smart
       contract" geçtiği için "Hukuk alanında", hac medya planı
       "security" geçtiği için "Güvenlik alanında" çıkıyordu. Yanlış
       bir etiket, etiketsizden kötüdür — görev cümlesi tek başına hem
       doğru hem yeterli. */
    $cumle = $tur === 'image' ? turkceTanim($okunacak) . ' üretir' : metinGorevi($okunacak);

    $aciklama = mb_convert_case(mb_substr($cumle, 0, 1), MB_CASE_UPPER, 'UTF-8') . mb_substr($cumle, 1) . '.'
              . ($tur === 'image'
                    ? ' Görsel üretim modellerine verilir.'
                    : ' ChatGPT, Gemini veya Claude gibi sohbet asistanlarına yapıştırıp kullanırsın.')
              . ' Prompt metni İngilizce. Hazır katalog promptu.';

    /* SÜTUN SINIRI: prompts.prompt_text bir TEXT sütunu, yani en fazla
       65.535 BAYT. MySQL bunu aşan değeri UYARI BİLE VERMEDEN kırpıyor
       (canlıda ölçüldü: 69.145 baytlık prompt 3.609 bayta düştü).
       Yarım kalmış bir promptu yayınlamaktansa hiç almamak doğru. */
    if (strlen($x['prompt']) > 65000) {
        $atlanan[] = $baslik . ' (' . number_format(strlen($x['prompt'])) . ' bayt)';
        continue;
    }

    $satirlar[] = [
        'kat'     => $kat,
        'tur'     => $tur,
        'arac'    => $arac,
        'baslik'  => $baslik,
        'aciklama'=> kirp($aciklama, 500),
        'onizleme'=> Onizleme::temizle($x['prompt']),
        'metin'   => rtrim($x['prompt']),
    ];
    $dagilim[$kat] = ($dagilim[$kat] ?? 0) + 1;
}
fclose($h);

ksort($dagilim);
fwrite(STDERR, 'Kayıt: ' . count($satirlar) . "\n");
fwrite(STDERR, 'Sütuna sığmadığı için atlanan: ' . count($atlanan) . "\n");
foreach ($atlanan as $a) fwrite(STDERR, "  - $a\n");
foreach ($dagilim as $k => $v) fwrite(STDERR, sprintf("  %-10s %d\n", $k, $v));
file_put_contents("$SCR/satirlar.json", json_encode($satirlar, JSON_UNESCAPED_UNICODE));

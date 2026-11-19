<?php

/*
 * prompts.chat kataloğunu (CC0) satırlara çevirir.
 *
 *   php 1-cozumle.php <calisma-klasoru> [prompts.csv]
 *
 * Çıktı: <calisma-klasoru>/satirlar.json
 */

require __DIR__ . '/gorsel-yardimcilar.php';

$klasor = rtrim($argv[1] ?? getcwd(), '/');
$giris = fopen($argv[2] ?? "$klasor/prompts.csv", 'r');
if ($giris === false) {
    fwrite(STDERR, "Girdi açılamadı\n");
    exit(1);
}

// escape karakteri boş: dosya RFC 4180, ters bölü kaçışı kullanmıyor
$bas = fgetcsv($giris, 0, ',', '"', '');

// Kategori sırayla aranıyor, ilk tutan kazanıyor.
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

/*
 * Kategori yalnızca başlıktan seçiliyor. Gövdede arayınca "Florist"
 * (metinde "design" geçiyor) tasarıma, "Chemical Reactor" ("html" geçiyor)
 * web'e düşüyordu.
 */
function kategoriSec(array $x, array $anahtarlar): string
{
    if (($x['type'] ?? '') === 'IMAGE') {
        return 'gorsel';
    }
    if (($x['for_devs'] ?? '') === 'TRUE') {
        return 'kod';
    }

    $ad = mb_strtolower($x['act']);
    foreach ($anahtarlar as $kategori => $kelimeler) {
        foreach ($kelimeler as $k) {
            if (preg_match('/\b' . preg_quote($k, '/') . '\b/u', $ad)) {
                return $kategori;
            }
        }
    }

    return 'metin';
}

$satirlar = [];
$atlanan = [];
$dagilim = [];
$gorulen = [];

while (($r = fgetcsv($giris, 0, ',', '"', '')) !== false) {
    if (count($r) < 2) {
        continue;
    }
    $x = array_combine(array_slice($bas, 0, count($r)), $r);
    if (trim($x['act'] ?? '') === '' || trim($x['prompt'] ?? '') === '') {
        continue;
    }

    $baslik = kirp($x['act'], 160);

    // aynı başlık ikinci kez gelirse atlanıyor
    $anahtar = mb_strtolower($baslik);
    if (isset($gorulen[$anahtar])) {
        continue;
    }
    $gorulen[$anahtar] = true;

    // MySQL'de TEXT 65.535 bayt ve fazlasını sessizce kırpıyor.
    // Yarım prompt yayınlamaktansa alınmıyor.
    if (strlen($x['prompt']) > 65000) {
        $atlanan[] = $baslik . ' (' . number_format(strlen($x['prompt'])) . ' bayt)';
        continue;
    }

    $kategori = kategoriSec($x, $anahtarlar);
    $tur = ($x['type'] ?? '') === 'IMAGE' ? 'image' : 'text';
    $arac = $tur === 'image'
        ? aracSec($baslik . ' ' . mb_substr($x['prompt'], 0, 1500))
        : 'chatgpt';

    // Alan etiketi (hukuk, güvenlik...) denendi ama yanlış çıkıyordu:
    // "Ethereum Developer" metninde "smart contract" geçtiği için hukuk
    // sayılmıştı. Yalnızca görev cümlesi kullanılıyor.
    $okunacak = $baslik . ' ' . mb_substr($x['prompt'], 0, 2000);
    $cumle = $tur === 'image' ? turkceTanim($okunacak) . ' üretir' : metinGorevi($okunacak);

    $aciklama = ilkHarfBuyuk($cumle) . '.'
        . ($tur === 'image'
            ? ' Görsel üretim modellerine verilir.'
            : ' ChatGPT, Gemini veya Claude gibi sohbet asistanlarına yapıştırıp kullanırsın.')
        . ' Prompt metni İngilizce. Hazır katalog promptu.';

    $satirlar[] = [
        'kat'      => $kategori,
        'tur'      => $tur,
        'arac'     => $arac,
        'baslik'   => $baslik,
        'aciklama' => kirp($aciklama, 500),
        'metin'    => rtrim($x['prompt']),
    ];
    $dagilim[$kategori] = ($dagilim[$kategori] ?? 0) + 1;
}
fclose($giris);

ksort($dagilim);
fwrite(STDERR, 'Kayıt: ' . count($satirlar) . "\n");
fwrite(STDERR, 'Sütuna sığmadığı için atlanan: ' . count($atlanan) . "\n");
foreach ($atlanan as $a) {
    fwrite(STDERR, "  - $a\n");
}
foreach ($dagilim as $k => $v) {
    fwrite(STDERR, sprintf("  %-10s %d\n", $k, $v));
}

file_put_contents("$klasor/satirlar.json", json_encode($satirlar, JSON_UNESCAPED_UNICODE));

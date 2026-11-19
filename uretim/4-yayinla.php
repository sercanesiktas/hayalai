<?php

/*
 * satirlar.json + gorsel-satirlar.json dosyalarından depodaki yayın
 * dosyalarını üretir:
 *
 *   prompts.csv        tek dosyada her şey
 *   promptlar/*.md     kategori kategori, okunabilir
 *   docs/arama.json    docs/index.html arama sayfasının dizini
 *
 *   php 4-yayinla.php <calisma-klasoru> [depo-koku]
 *
 * Metin katalogu önce geliyor; iki katalogda aynı başlık varsa metin
 * tarafındaki kalıyor.
 */

$klasor = rtrim($argv[1] ?? getcwd(), '/');
$depo = rtrim($argv[2] ?? dirname(__DIR__), '/');

const KATEGORILER = [
    'gorsel'    => 'Görsel',
    'metin'     => 'Metin',
    'kod'       => 'Kod',
    'web'       => 'Web',
    'video'     => 'Video',
    'pazarlama' => 'Pazarlama',
    'ses'       => 'Ses',
    'tasarim'   => 'Tasarım',
    'mobil'     => 'Mobil',
];
const DOSYA_BASINA = 400;

function oku(string $yol): array
{
    return is_file($yol) ? (json_decode((string) file_get_contents($yol), true) ?: []) : [];
}

/* GitHub'ın başlık bağlantısı: küçük harf, noktalama gider, boşluk tire olur. */
function baglanti(string $baslik): string
{
    $s = mb_strtolower($baslik);
    $s = preg_replace('/[^\p{L}\p{N}\p{M}_\- ]/u', '', $s);

    return str_replace(' ', '-', $s);
}

/* Başlıkta biçim işareti varsa GitHub bağlantıyı başka türetebiliyor; o durumda dosyaya gidip bırakıyoruz. */
function bagKesin(string $baslik): bool
{
    return ! preg_match('/[*`\[\]<>&~|_\\\\]/', $baslik);
}

/* Prompt içinde ``` varsa blok erken kapanıyordu; çiti içindeki en uzun diziden uzun tutuyoruz. */
function cit(string $metin): string
{
    $en = 0;
    if (preg_match_all('/`+/', $metin, $m)) {
        foreach ($m[0] as $dizi) {
            $en = max($en, strlen($dizi));
        }
    }

    return str_repeat('`', max(3, $en + 1));
}

$satirlar = [];
$gorulen = [];
foreach (array_merge(oku("$klasor/satirlar.json"), oku("$klasor/gorsel-satirlar.json")) as $s) {
    $anahtar = mb_strtolower($s['baslik']);
    if (isset($gorulen[$anahtar])) {
        continue;
    }
    $gorulen[$anahtar] = true;
    $satirlar[] = $s;
}

if (! $satirlar) {
    fwrite(STDERR, "Girdi boş: $klasor/satirlar.json bulunamadı mı?\n");
    exit(1);
}

// --- CSV -------------------------------------------------------------
$csv = fopen("$depo/prompts.csv", 'w');
fputcsv($csv, ['title', 'category', 'type', 'tool', 'description_tr', 'prompt'], ',', '"', '');
foreach ($satirlar as $s) {
    fputcsv($csv, [$s['baslik'], $s['kat'], $s['tur'], $s['arac'], $s['aciklama'], $s['metin']], ',', '"', '');
}
fclose($csv);

// --- Markdown --------------------------------------------------------
if (! is_dir("$depo/promptlar")) {
    mkdir("$depo/promptlar", 0775, true);
}
foreach (glob("$depo/promptlar/*.md") as $eski) {
    unlink($eski);
}

$gruplar = [];
foreach ($satirlar as $s) {
    $gruplar[$s['kat']][] = $s;
}

$arama = [];
$dosyaSayisi = [];

foreach (KATEGORILER as $kod => $ad) {
    $grup = $gruplar[$kod] ?? [];
    if (! $grup) {
        continue;
    }

    $parcalar = array_chunk($grup, DOSYA_BASINA);
    $coklu = count($parcalar) > 1;
    $dosyaSayisi[$kod] = count($parcalar);

    foreach ($parcalar as $i => $parca) {
        $dosyaAdi = $coklu ? sprintf('%s-%02d.md', $kod, $i + 1) : "$kod.md";
        $baslik = $coklu ? sprintf('# %s — %d/%d', $ad, $i + 1, count($parcalar)) : "# $ad";

        $md = $baslik . "\n\n`" . count($parca) . " prompt`  ·  [← tüm kategoriler](../README.md#kategoriler)\n\n---\n\n";
        $bag = [];

        foreach ($parca as $s) {
            $b = baglanti($s['baslik']);
            $n = $bag[$b] = ($bag[$b] ?? -1) + 1;
            $slug = $n === 0 ? $b : "$b-$n";

            // markdown'da baştaki/sondaki boşluk kırpılıyor, CSV ham kalıyor
            $metin = trim($s['metin']);
            $c = cit($metin);
            $md .= "## {$s['baslik']}\n\n> {$s['aciklama']}\n\n{$c}\n{$metin}\n{$c}\n\n";

            $arama[] = [$s['baslik'], $kod, $s['arac'], $s['aciklama'], $dosyaAdi, bagKesin($s['baslik']) ? $slug : ''];
        }

        file_put_contents("$depo/promptlar/$dosyaAdi", $md);
    }
}

// --- Arama dizini ----------------------------------------------------
if (! is_dir("$depo/docs")) {
    mkdir("$depo/docs", 0775, true);
}
file_put_contents(
    "$depo/docs/arama.json",
    json_encode(['adet' => count($arama), 'satirlar' => $arama], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

fwrite(STDERR, 'Yazıldı: ' . count($satirlar) . " prompt\n");
foreach ($dosyaSayisi as $kod => $n) {
    fwrite(STDERR, sprintf("  %-10s %6d prompt, %d dosya\n", $kod, count($gruplar[$kod]), $n));
}

<?php

/*
 * Günün promptunu seçer; README'deki bölümü ve gunun-promptu/ arşivini yazar.
 *
 *   php gunun-promptu.php [YYYY-AA-GG]
 *
 * Seçim tarihe bağlı ve sabit: aynı gün çalıştırınca aynı prompt çıkıyor.
 * Çift günler metin/kod, tek günler görsel promptu.
 */

$depo = dirname(__DIR__);
$tarih = $argv[1] ?? gmdate('Y-m-d');

if (! preg_match('/^\d{4}-\d{2}-\d{2}$/', $tarih)) {
    fwrite(STDERR, "Tarih YYYY-AA-GG olmalı\n");
    exit(1);
}

$aylar = ['', 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'];
$zaman = strtotime($tarih . ' 00:00:00 UTC');
$gunNo = intdiv($zaman, 86400);
$gunYazi = (int) gmdate('j', $zaman) . ' ' . $aylar[(int) gmdate('n', $zaman)] . ' ' . gmdate('Y', $zaman);

// Okunabilir yazı isteyen görsel promptlar difüzyon modellerinde bozuk çıkıyor (bkz. ISTATISTIK.md)
$yaziAgirlikli = '/infographic|poster|flyer|thumbnail|banner|slide|brochure|magazine cover|book cover|logo|'
    . 'wordmark|typography|text overlay|headline|menu|invoice|certificate|resume|newspaper|comic|manga|'
    . 'storyboard|subtitle|packaging|billboard|\bui\b|\bux\b|app screen|dashboard|landing page|mockup/i';

$girdi = fopen("$depo/prompts.csv", 'r');
$bas = fgetcsv($girdi, 0, ',', '"', '');

$havuz = ['text' => [], 'image' => []];
while (($r = fgetcsv($girdi, 0, ',', '"', '')) !== false) {
    $x = array_combine($bas, $r);
    $metin = trim($x['prompt']);

    if (mb_strlen($metin) > 1200 || str_contains($metin, '```')) {
        continue;
    }
    if ($x['type'] === 'image'
        && (str_contains($x['description_tr'], 'REFERANS GÖRSEL') || preg_match($yaziAgirlikli, $x['title'] . ' ' . $metin))) {
        continue;
    }

    $havuz[$x['type']][] = $x;
}
fclose($girdi);

// başlığa göre sabit karıştırma: yeni prompt eklenince bütün sıra değişmesin
foreach ($havuz as &$liste) {
    usort($liste, fn ($a, $b) => crc32($a['title']) <=> crc32($b['title']) ?: strcmp($a['title'], $b['title']));
}
unset($liste);

$tur = $gunNo % 2 === 0 ? 'text' : 'image';
$secilen = $havuz[$tur][intdiv($gunNo, 2) % count($havuz[$tur])];
$metin = trim($secilen['prompt']);

$kategoriAd = [
    'gorsel' => 'Görsel', 'metin' => 'Metin', 'kod' => 'Kod', 'web' => 'Web', 'video' => 'Video',
    'pazarlama' => 'Pazarlama', 'ses' => 'Ses', 'tasarim' => 'Tasarım', 'mobil' => 'Mobil',
][$secilen['category']] ?? $secilen['category'];

// --- arşiv dosyası ---------------------------------------------------
if (! is_dir("$depo/gunun-promptu")) {
    mkdir("$depo/gunun-promptu", 0775, true);
}
$arsiv = "# $gunYazi: {$secilen['title']}\n\n"
    . "> {$secilen['description_tr']}\n\n"
    . "```\n$metin\n```\n\n"
    . "`$kategoriAd` · `{$secilen['tool']}` · [tüm $kategoriAd promptları](../promptlar/)\n";
file_put_contents("$depo/gunun-promptu/$tarih.md", $arsiv);

// --- README bölümü ---------------------------------------------------
$bolum = "<!-- gunun-promptu:basla -->\n"
    . "**$gunYazi:** {$secilen['title']}\n\n"
    . "> {$secilen['description_tr']}\n\n"
    . "```\n$metin\n```\n\n"
    . "<sub>Önceki günler: [gunun-promptu/](gunun-promptu/)</sub>\n"
    . "<!-- gunun-promptu:bitis -->";

$readme = file_get_contents("$depo/README.md");
$yeni = preg_replace(
    '/<!-- gunun-promptu:basla -->.*?<!-- gunun-promptu:bitis -->/s',
    str_replace(['\\', '$'], ['\\\\', '\\$'], $bolum),
    $readme,
    1,
    $adet
);

if ($adet !== 1) {
    fwrite(STDERR, "README.md içinde gunun-promptu işaretleri bulunamadı\n");
    exit(1);
}
file_put_contents("$depo/README.md", $yeni);

echo "$tarih: {$secilen['title']} ({$secilen['category']}, {$secilen['tool']})\n";

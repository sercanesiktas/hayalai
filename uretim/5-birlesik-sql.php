<?php
/**
 * İki kataloğu TEK SQL dosyasında birleştirir.
 *
 *   php database/acik-katalog/5-birlesik-sql.php /cikti
 *
 * Girdi: satirlar.json (metin) + gorsel-satirlar.json (görsel)
 * Çıktı: hayalai-katalog.sql
 *
 * TEK DOSYA, ÇÜNKÜ iki ayrı içe aktarma iki ayrı hata noktası demekti:
 * biri yüklenip diğeri unutulduğunda site yarım katalogla kalıyordu ve
 * bunu fark etmenin yolu yoktu.
 */
$SCR = rtrim($argv[1] ?? getcwd(), '/');

$metin  = json_decode((string) file_get_contents("{$SCR}/satirlar.json"), true) ?: [];
$gorsel = json_decode((string) file_get_contents("{$SCR}/gorsel-satirlar.json"), true) ?: [];

/* Metin kataloğundaki görsel promptlar da görsel sayılıyor; ikisi
   birleşince aynı başlık iki kez gelebilir, o yüzden burada da
   benzersizleştiriliyor. */
$satirlar = [];
$gorulen  = [];
$cakisan  = 0;

foreach (array_merge($metin, $gorsel) as $s) {
    $anahtar = mb_strtolower($s['baslik']);
    if (isset($gorulen[$anahtar])) { $cakisan++; continue; }
    $gorulen[$anahtar] = true;
    $satirlar[] = $s;
}

function q(?string $s): string {
    if ($s === null) return 'NULL';
    return "'" . str_replace(
        ["\\",   "'",   "\0",  "\r",  "\n",  "\032"],
        ["\\\\", "\\'", "\\0", "\\r", "\\n", "\\Z"],
        $s
    ) . "'";
}

$adet   = count($satirlar);
$gAdet  = count(array_filter($satirlar, fn ($s) => $s['tur'] === 'image'));
$mAdet  = $adet - $gAdet;
$tarih  = date('Y-m-d');

$out = fopen("{$SCR}/hayalai-katalog.sql", 'w');
$yaz = fn (string $t) => fwrite($out, $t);

$yaz(<<<SQL
-- ==========================================================================
--  HAYALAI — HAZIR PROMPT KATALOĞU (tek dosya)
--  Üretim tarihi: {$tarih}
--  Kayıt: {$adet}   ({$mAdet} metin/kod · {$gAdet} görsel)
-- ==========================================================================
--
--  NASIL YÜKLENİR
--    phpMyAdmin > İçe Aktar > bu dosya > Başlat
--  ya da sunucuda:
--    mysql -u KULLANICI -p VERITABANI < hayalai-katalog.sql
--
--  ÖNCE VERİTABANI YEDEĞİ AL.
--
--  KATALOĞUN KENDİ SATICI HESABI VAR: "HayalAI" (@hayalai). Yoksa bu
--  dosya onu kendisi oluşturuyor. Promptlar SENİN hesabına bağlanmıyor
--  — kendi ilanların, kendi adın ve kendi satıcı sayfan ayrı duruyor.
--  Bu hesap giriş yapamaz ve yönetici yetkisi yoktur.
--
--  GÜVENLİ: iki kez çalıştırılabilir. Aynı başlıklı prompt ikinci kez
--  eklenmez, mevcut hiçbir kayıt değişmez.
--
--  HER PROMPTUN BİR HEDEF ARACI VAR. "Fark etmez / diğer" kullanılmıyor:
--  o seçenekte prompt detayında hiçbir "şurada dene" düğmesi basılmıyor
--  ve kullanıcı promptu nereye götüreceğini bilemiyordu. Metinde adı
--  geçen bir araç varsa o (Gemini, Midjourney, Firefly…), yoksa ChatGPT.
--
--  KAPAK GÖRSELİ YOK. Kapağı olmayan kart promptun kendi önizlemesini
--  gösteriyor, yani hiçbir şey hakkında yanlış iddia edilmiyor.
--  Örnekleri sonradan, promptun KENDİSİNİ çalıştırarak dolduruyorsun:
--      php artisan katalog:ornek-uret --adet=20 --onayla
--  ya da public/ornek-uret.php sayfasından.
--
--  LİSANS: görsel promptlar MIT (atıf zorunlu) — lisans metni
--  database/LISANS-gorsel-katalog.txt dosyasında, silme. Metin
--  promptları CC0 (kamu malı), atıf gerekmiyor.
--
--  GERİ ALMAK İÇİN:
--    DELETE FROM prompts WHERE description LIKE '%Hazır katalog promptu.%';
-- ==========================================================================

SET NAMES utf8mb4;
SET SESSION sql_mode = REPLACE(@@SESSION.sql_mode, 'NO_BACKSLASH_ESCAPES', '');

START TRANSACTION;

DROP TABLE IF EXISTS hayalai_katalog_gecici;
CREATE TABLE hayalai_katalog_gecici (
  kat         VARCHAR(30)  NOT NULL,
  tur         VARCHAR(10)  NOT NULL,
  arac        VARCHAR(40)  NOT NULL,
  title       VARCHAR(160) NOT NULL,
  description TEXT,
  preview     TEXT,
  prompt_text LONGTEXT     NOT NULL,
  KEY (title)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


SQL);

$yigin = array_chunk($satirlar, 50);
foreach ($yigin as $i => $grup) {
    $yaz('-- yığın ' . ($i + 1) . '/' . count($yigin) . "\n");
    $yaz("INSERT INTO hayalai_katalog_gecici (kat, tur, arac, title, description, preview, prompt_text) VALUES\n");
    $p = [];
    foreach ($grup as $s) {
        $p[] = '(' . implode(',', [
            q($s['kat']), q($s['tur']), q($s['arac']),
            q($s['baslik']), q($s['aciklama']), q($s['onizleme']), q($s['metin']),
        ]) . ')';
    }
    $yaz(implode(",\n", $p) . ";\n\n");
}

$yaz(<<<'SQL'

-- --------------------------------------------------------------------
-- KATALOĞUN KENDİ SATICI HESABI
-- --------------------------------------------------------------------
-- Promptlar ARTIK YÖNETİCİNİN HESABINA BAĞLANMIYOR. Önce öyleydi ve
-- kurucunun kendi vitrini kayboluyordu: kendi yazdığı ilanlar da hazır
-- katalog promptlarıyla aynı hesapta görünüyor, "satıcı profilini gör"
-- kendi sayfasına gidiyor ve kişi adı 17 bin hazır promptla birlikte
-- anılıyordu.
--
-- Şimdi katalog kendi hesabına ait: "HayalAI". Kurucunun hesabı kendi
-- adıyla, kendi ilanlarıyla, kendi satıcı sayfasıyla ayrı duruyor.
--
-- HESAP GİRİŞ YAPAMAZ: parola alanına geçersiz bir damga yazılıyor
-- (hiçbir parolanın bcrypt karşılığı değil), rol 'user' — yani yönetici
-- yetkisi de yok. Amacı yalnızca ilanların altında bir ad ve tıklanınca
-- açılan bir vitrin olmak.
INSERT INTO users (name, username, email, password, role, is_active, email_verified_at, created_at, updated_at)
SELECT 'HayalAI', 'hayalai', 'katalog@hayalai.local',
       '$2y$12$katalogHesabiGirisYapamazXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
       'user', 1, NOW(), NOW(), NOW()
FROM DUAL
WHERE NOT EXISTS (SELECT 1 FROM users WHERE username = 'hayalai');

SET @satici = (SELECT id FROM users WHERE username = 'hayalai' LIMIT 1);

INSERT INTO prompts
    (seller_id, category_id, type, target_tool, title, description, preview,
     prompt_text, cover_image, status, credit_cost, version, view_count,
     published_at, created_at, updated_at)
SELECT
    @satici, c.id, i.tur, i.arac, i.title, i.description, i.preview, i.prompt_text,
    NULL, 'active', 0, 1, 0, NOW(), NOW(), NOW()
FROM hayalai_katalog_gecici i
JOIN categories c ON c.slug = i.kat
WHERE @satici IS NOT NULL
  AND NOT EXISTS (SELECT 1 FROM prompts p WHERE p.title = i.title);

DROP TABLE hayalai_katalog_gecici;

COMMIT;

SELECT
    (SELECT COUNT(*) FROM prompts WHERE seller_id = @satici) AS kurum_promptu,
    (SELECT COUNT(*) FROM prompts WHERE seller_id = @satici AND type = 'image') AS gorsel,
    (SELECT COUNT(*) FROM prompts WHERE seller_id = @satici AND target_tool = 'diger-gorsel') AS fark_etmez_kalan,
    @satici AS katalog_satici_id;
SQL);

fclose($out);
echo 'yazildi: ' . number_format(filesize("{$SCR}/hayalai-katalog.sql")) . " bayt · {$adet} kayıt"
   . ($cakisan ? " (birleşmede {$cakisan} çakışan başlık atıldı)" : '') . "\n";

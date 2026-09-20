<?php

/**
 * KART ÖNİZLEMESİ — PROMPT METNİNİ OKUNUR HÂLE GETİRİR.
 *
 * NEDEN VAR
 * ---------
 * Keşfet sayfasında metin promptlarının kapağı yok; kartın üst yarısı
 * promptun kendi metnini gösteriyor. Hazır katalogdan gelen promptlarda
 * o metin çoğu zaman şöyle başlıyordu:
 *
 *   { "prompt": "You will perform an image edit using the people from
 *   ...engagement.\nYour task is to design a multiplayer defense...
 *
 * Yani JSON parantezleri, alan adları ve KAÇIŞ DİZİLERİ ("\n" harfi
 * harfine, satır sonu olarak değil) kartın en görünür yerinde duruyordu.
 * Ekranda dağınık, ne sattığını anlatmayan bir metin bloğu çıkıyordu.
 *
 * Buradaki iş promptu DEĞİŞTİRMEK değil — satılan metne dokunulmuyor.
 * Yalnızca vitrindeki önizleme, insanın okuyabileceği hâle getiriliyor.
 */
class Onizleme
{
    /**
     * Ham prompt metninden kart önizlemesi üretir.
     */
    public static function temizle(string $ham, int $sinir = 180): string
    {
        $metin = trim($ham);

        if ($metin === '') {
            return '';
        }

        /* Kod çiti EN BAŞTA kalkıyor. Sonra kaldırılınca ```json ile
           başlayan bir metin JSON sayılmıyor, parantezleri olduğu gibi
           karta düşüyordu (ölçüldü). */
        $metin = trim(preg_replace('/^```[a-z]*\s*/i', '', $metin));
        $metin = trim(str_replace('```', ' ', $metin));

        $metin = self::jsondanCikar($metin);
        $metin = self::kacislariCoz($metin);

        // Markdown başlık işaretleri: kartta biçim yok, yalnızca gürültü.
        $metin = preg_replace('/^#{1,6}\s*/m', '', $metin);

        // Satır yapısı kartta korunmuyor: tek paragraf daha derli toplu.
        $metin = trim(preg_replace('/\s+/u', ' ', $metin));

        // Baştaki süs karakterleri.
        $metin = trim($metin, " \t\n\r\0\x0B\"'{}[]:,-*•—–");

        return self::cumleSinirindaKes($metin, $sinir);
    }

    /**
     * Metin JSON ise içindeki asıl talimatı çıkarır.
     *
     * Katalogdaki görsel promptların bir kısmı `{"prompt": "..."}`,
     * `{"TASK": "..."}` gibi sarmalanmış geliyor. Kartta gösterilmesi
     * gereken parantezler değil, İÇİNDEKİ CÜMLE.
     *
     * Tam çözümleme başarısız olursa (metin kırpılmış olabilir) ilk
     * "anahtar": "değer" çifti düzenli ifadeyle alınıyor — yarım bir
     * JSON yüzünden önizlemenin tamamen boş kalması, parantezleri
     * göstermekten de kötü olurdu.
     */
    private static function jsondanCikar(string $metin): string
    {
        if (! str_starts_with($metin, '{') && ! str_starts_with($metin, '[')) {
            return $metin;
        }

        $cozulen = json_decode($metin, true);

        if (is_array($cozulen)) {
            $enUzun = '';

            array_walk_recursive($cozulen, function ($deger) use (&$enUzun) {
                if (is_string($deger) && mb_strlen($deger) > mb_strlen($enUzun)) {
                    $enUzun = $deger;
                }
            });

            if ($enUzun !== '') {
                return $enUzun;
            }
        }

        /* Kırpılmış JSON: ilk metin değerini yakala. Değer kapanmamış
           olabilir, o yüzden kapanış tırnağı ZORUNLU DEĞİL. */
        if (preg_match('/"[^"]{1,40}"\s*:\s*"((?:[^"\\\\]|\\\\.)+)/u', $metin, $e) === 1) {
            return $e[1];
        }

        return $metin;
    }

    /**
     * Harfi harfine yazılmış kaçış dizilerini gerçek karşılıklarına çevirir.
     *
     * Kaynak verilerde "\n" iki karakter olarak duruyor. Kart
     * `white-space: pre-line` kullandığı için satır sonu sanılıp
     * çözülmüyor, ekranda ters bölü ve n olarak görünüyordu.
     */
    private static function kacislariCoz(string $metin): string
    {
        return str_replace(
            ['\\r\\n', '\\n', '\\r', '\\t', '\\"', "\\'", '\\\\'],
            ["\n", "\n", "\n", ' ', '"', "'", '\\'],
            $metin,
        );
    }

    /**
     * Sınıra kadar kısaltır, mümkünse CÜMLE sonunda keser.
     *
     * Kelimenin ortasında kesmek "…engageme…" gibi bir şey bırakıyor;
     * cümle sonunda kesince önizleme bitmiş bir düşünce oluyor.
     */
    private static function cumleSinirindaKes(string $metin, int $sinir): string
    {
        if (mb_strlen($metin) <= $sinir) {
            return $metin;
        }

        $kisa = mb_substr($metin, 0, $sinir);

        // En son cümle sonu: nokta, soru, ünlem.
        if (preg_match('/^(.*[.!?])[^.!?]*$/su', $kisa, $e) === 1
            && mb_strlen($e[1]) > $sinir * 0.5) {
            return trim($e[1]);
        }

        $bosluk = mb_strrpos($kisa, ' ');

        return trim($bosluk > $sinir * 0.5 ? mb_substr($kisa, 0, $bosluk) : $kisa) . '…';
    }
}

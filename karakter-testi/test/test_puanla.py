import shutil
import sys
import tempfile
import unittest
from pathlib import Path

sys.path.insert(0, str(Path(__file__).resolve().parent.parent))
import puanla  # noqa: E402

FONT = "/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf"


class Olcutler(unittest.TestCase):
    def test_benzerlik_buyuk_kucuk_farki_saymaz(self):
        self.assertEqual(puanla.benzerlik("ÇIĞLIK", "çığlık"), 1.0)
        self.assertEqual(puanla.benzerlik("İstanbul", "istanbul"), 1.0)

    def test_benzerlik_i_ve_dotless_i_ayri(self):
        # Işık / İşik farkı: kucult() I→ı, İ→i yaptığı için fark görünmeli
        self.assertLess(puanla.benzerlik("Işık", "İşik"), 1.0)

    def test_benzerlik_alakasiz_metin_dusuk(self):
        self.assertLess(puanla.benzerlik("abcdef", "xyzxyz"), 0.2)
        self.assertEqual(puanla.benzerlik("", "abc"), 0.0)

    def test_ozel_harf_dogru(self):
        self.assertEqual(puanla.ozel_harf("Şişli", "Şişli"), {"toplam": 2, "dogru": 2, "aksan_dustu": 0})

    def test_ozel_harf_aksan_dustu(self):
        self.assertEqual(puanla.ozel_harf("Şişli", "Sisli"), {"toplam": 2, "dogru": 0, "aksan_dustu": 2})
        self.assertEqual(puanla.ozel_harf("KÜÇÜKÇEKMECE", "KUCUKCEKMECE")["aksan_dustu"], 4)

    def test_i_ve_dotless_i_karisimi_sayilir(self):
        self.assertEqual(puanla.ozel_harf("ıİ", "iI"), {"toplam": 2, "dogru": 0, "aksan_dustu": 2})
        self.assertEqual(puanla.ozel_harf("ÇIĞLIK", "CIGLIK")["toplam"], 4)  # Ç, I, Ğ, I

    def test_aksan_dusmeyen_ama_yanlis_harf(self):
        r = puanla.ozel_harf("ağaç", "xx")
        self.assertEqual((r["dogru"], r["aksan_dustu"]), (0, 0))

    def test_ozet_bos(self):
        self.assertEqual(puanla.ozet([{"gorsel": False}]), {"gorsel": 0})


@unittest.skipUnless(shutil.which("tesseract") and Path(FONT).exists(), "tesseract ya da yazı tipi yok")
class OcrIleUcAUca(unittest.TestCase):
    """Sentetik görsellerle puanlayıcının doğruyu yanlıştan ayırdığını doğrular."""

    @classmethod
    def setUpClass(cls):
        from PIL import Image, ImageDraw, ImageFont  # yalnızca testte gerekli
        cls.dizin = Path(tempfile.mkdtemp())
        font = ImageFont.truetype(FONT, 72)

        def ciz(ad, metin):
            im = Image.new("RGB", (1300, 160), "white")
            ImageDraw.Draw(im).text((30, 30), metin, font=font, fill="black")
            im.save(cls.dizin / f"{ad}.png")

        cls.testler = [
            {"id": "a", "grup": "kelime", "metin": "Şişli"},
            {"id": "b", "grup": "kelime", "metin": "ÇIĞLIK"},
            {"id": "c", "grup": "cümle", "metin": "Günaydın, bugün hava çok güzel"},
        ]
        # doğru: metin aynen çizilir
        d = cls.dizin / "dogru"
        d.mkdir()
        for t in cls.testler:
            ciz("tmp", t["metin"])
            (cls.dizin / "tmp.png").rename(d / f"{t['id']}.png")
        # aksan düşmüş: ş→s, Ç→C, Ğ→G, ü→u ...
        tablo = str.maketrans("çğıöşüÇĞİÖŞÜ", "cgiosuCGIOSU")
        e = cls.dizin / "aksansiz"
        e.mkdir()
        for t in cls.testler:
            ciz("tmp", t["metin"].translate(tablo))
            (cls.dizin / "tmp.png").rename(e / f"{t['id']}.png")
        # anlamsız: aynı uzunlukta rastgele harfler
        r = cls.dizin / "anlamsiz"
        r.mkdir()
        for t, metin in zip(cls.testler, ["Xqvzt", "WJKPQV", "Zxcvb qwert yuiop asdfg hjklm"]):
            ciz("tmp", metin)
            (cls.dizin / "tmp.png").rename(r / f"{t['id']}.png")

    @classmethod
    def tearDownClass(cls):
        shutil.rmtree(cls.dizin, ignore_errors=True)

    def sonuc(self, ad):
        return puanla.ozet(puanla.puanla(self.dizin / ad, self.testler))

    def test_dogru_gorsel_yuksek_puan(self):
        o = self.sonuc("dogru")
        self.assertGreaterEqual(o["ortalama_benzerlik"], 0.9, o)
        self.assertGreaterEqual(o["ozel_harf_dogru"], 0.8, o)

    def test_aksansiz_gorsel_aksan_dustu_olarak_gorunur(self):
        o = self.sonuc("aksansiz")
        self.assertGreaterEqual(o["aksan_dustu"], 0.7, o)
        self.assertLessEqual(o["ozel_harf_dogru"], 0.2, o)
        # harfler doğru ama aksan yok: benzerlik hâlâ yüksek, ayırt eden özel harf ölçütü
        self.assertGreaterEqual(o["ortalama_benzerlik"], 0.5, o)

    def test_anlamsiz_gorsel_dusuk_puan(self):
        o = self.sonuc("anlamsiz")
        self.assertLessEqual(o["ortalama_benzerlik"], 0.3, o)
        self.assertEqual(o["tam_dogru"], 0.0, o)

    def test_eksik_gorsel_sayilir(self):
        o = puanla.ozet(puanla.puanla(self.dizin / "yok", self.testler))
        self.assertEqual(o, {"gorsel": 0})


if __name__ == "__main__":
    unittest.main()

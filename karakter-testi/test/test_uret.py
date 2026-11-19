import base64
import json
import sys
import tempfile
import unittest
from pathlib import Path
from unittest import mock

sys.path.insert(0, str(Path(__file__).resolve().parent.parent))
import uret  # noqa: E402

PNG = b"\x89PNG\r\n\x1a\n" + b"x" * 20
JPG = b"\xff\xd8\xff\xe0" + b"x" * 20
TESTLER = [{"id": f"t{i}", "grup": "g", "metin": "m", "prompt": "p"} for i in range(4)]


class Yanitlar(unittest.TestCase):
    def setUp(self):
        self.gecici = tempfile.TemporaryDirectory()
        self.p = mock.patch.object(uret, "KOK", Path(self.gecici.name))
        self.p.start()

    def tearDown(self):
        self.p.stop()
        self.gecici.cleanup()

    def test_uzanti(self):
        self.assertEqual(uret.uzanti(PNG), ".png")
        self.assertEqual(uret.uzanti(JPG), ".jpg")
        self.assertEqual(uret.uzanti(b"RIFF\0\0\0\0WEBPxx"), ".webp")

    def test_cloudflare_yaniti_ayristirilir(self):
        env = {"CLOUDFLARE_ACCOUNT_ID": "h", "CLOUDFLARE_API_TOKEN": "t"}
        yanit = {"result": {"image": base64.b64encode(JPG).decode()}}
        with mock.patch.dict("os.environ", env), mock.patch.object(uret, "post", return_value=yanit) as post:
            self.assertEqual(uret.cloudflare("p", "@cf/m"), JPG)
        self.assertIn("/accounts/h/ai/run/@cf/m", post.call_args[0][0])
        self.assertEqual(post.call_args[0][1]["prompt"], "p")

    def test_gemini_yaniti_ayristirilir(self):
        yanit = {"candidates": [{"content": {"parts": [{"text": "x"}, {"inlineData": {"data": base64.b64encode(PNG).decode()}}]}}]}
        with mock.patch.dict("os.environ", {"GEMINI_API_KEY": "k"}), mock.patch.object(uret, "post", return_value=yanit):
            self.assertEqual(uret.gemini("p", "m"), PNG)

    def test_gemini_gorselsiz_yanit_hata(self):
        yanit = {"candidates": [{"content": {"parts": [{"text": "reddedildi"}]}}]}
        with mock.patch.dict("os.environ", {"GEMINI_API_KEY": "k"}), mock.patch.object(uret, "post", return_value=yanit):
            with self.assertRaises(RuntimeError):
                uret.gemini("p", "m")

    def test_kota_bitince_durur(self):
        cagrilar = []

        def sahte(prompt, model):
            cagrilar.append(1)
            if len(cagrilar) == 2:
                raise uret.KotaBitti("HTTP 429")
            return PNG

        with mock.patch.dict(uret.SAGLAYICILAR, {"sahte": (sahte, "m")}):
            klasor, sayac = uret.calistir("sahte", bekleme=0, testler=TESTLER)
        self.assertEqual(len(cagrilar), 2)          # kota görülünce üçüncü deneme yok
        self.assertEqual(sayac["uretildi"], 1)
        self.assertTrue(sayac["kota"])

    def test_tek_hata_kosuyu_durdurmaz(self):
        def sahte(prompt, model):
            if prompt == "p" and not hasattr(sahte, "bir"):
                sahte.bir = True
                raise RuntimeError("HTTP 500")
            return PNG

        with mock.patch.dict(uret.SAGLAYICILAR, {"sahte": (sahte, "m")}):
            klasor, sayac = uret.calistir("sahte", bekleme=0, testler=TESTLER)
        self.assertEqual((sayac["uretildi"], sayac["hata"]), (3, 1))

    def test_var_olan_gorsel_atlanir(self):
        with mock.patch.dict(uret.SAGLAYICILAR, {"sahte": (lambda p, m: PNG, "m")}):
            uret.calistir("sahte", bekleme=0, testler=TESTLER)
            klasor, sayac = uret.calistir("sahte", bekleme=0, testler=TESTLER)
        self.assertEqual((sayac["uretildi"], sayac["atlandi"]), (0, 4))


if __name__ == "__main__":
    unittest.main()

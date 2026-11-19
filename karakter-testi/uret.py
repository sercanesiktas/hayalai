#!/usr/bin/env python3
"""testler.json'daki promptları bir görsel API'sine gönderip ciktilar/<model>/ altına kaydeder.

    CLOUDFLARE_ACCOUNT_ID=... CLOUDFLARE_API_TOKEN=... python3 uret.py cloudflare
    GEMINI_API_KEY=...                                  python3 uret.py gemini

Anahtarlar ortam değişkeninden okunur. Kota ya da bakiye bitince (HTTP 402/429)
durur: sıradakini denemek bir şey değiştirmez.
Zaten üretilmiş görsel varsa atlanır, yani kaldığı yerden devam eder.
"""
import base64
import json
import os
import sys
import time
import urllib.error
import urllib.request
from pathlib import Path

KOK = Path(__file__).parent
BEKLEME = 3  # saniye; Pollinations gibi sağlayıcılar eşzamanlılık sınırı koyuyor


class KotaBitti(Exception):
    pass


def uzanti(veri):
    if veri[:8] == b"\x89PNG\r\n\x1a\n":
        return ".png"
    if veri[:3] == b"\xff\xd8\xff":
        return ".jpg"
    if veri[:4] == b"RIFF" and veri[8:12] == b"WEBP":
        return ".webp"
    return ".bin"


def post(adres, govde, baslik):
    istek = urllib.request.Request(adres, data=json.dumps(govde).encode(), headers={"Content-Type": "application/json", **baslik}, method="POST")
    try:
        with urllib.request.urlopen(istek, timeout=120) as y:
            return json.loads(y.read())
    except urllib.error.HTTPError as e:
        gövde = e.read().decode("utf-8", "replace")[:300]
        if e.code in (402, 429):
            raise KotaBitti(f"HTTP {e.code}: {gövde}")
        raise RuntimeError(f"HTTP {e.code}: {gövde}")


def cloudflare(prompt, model):
    hesap, token = os.environ["CLOUDFLARE_ACCOUNT_ID"], os.environ["CLOUDFLARE_API_TOKEN"]
    y = post(f"https://api.cloudflare.com/client/v4/accounts/{hesap}/ai/run/{model}",
             {"prompt": prompt, "steps": 4}, {"Authorization": f"Bearer {token}"})
    return base64.b64decode(y["result"]["image"])


def gemini(prompt, model):
    anahtar = os.environ["GEMINI_API_KEY"]
    y = post(f"https://generativelanguage.googleapis.com/v1beta/models/{model}:generateContent",
             {"contents": [{"parts": [{"text": prompt}]}], "generationConfig": {"responseModalities": ["IMAGE"]}},
             {"x-goog-api-key": anahtar})
    for parca in y["candidates"][0]["content"]["parts"]:
        if "inlineData" in parca:
            return base64.b64decode(parca["inlineData"]["data"])
    raise RuntimeError("yanıtta görsel yok")


SAGLAYICILAR = {
    "cloudflare": (cloudflare, "@cf/black-forest-labs/flux-1-schnell"),
    "gemini": (gemini, "gemini-3.1-flash-image-preview"),
}


def calistir(ad, model=None, bekleme=BEKLEME, testler=None):
    islev, varsayilan = SAGLAYICILAR[ad]
    model = model or varsayilan
    testler = testler if testler is not None else json.loads((KOK / "testler.json").read_text(encoding="utf-8"))
    klasor = KOK / "ciktilar" / (ad + "-" + model.rsplit("/", 1)[-1])
    klasor.mkdir(parents=True, exist_ok=True)

    sayac = {"uretildi": 0, "atlandi": 0, "hata": 0, "kota": False}
    for t in testler:
        if any((klasor / (t["id"] + u)).exists() for u in (".png", ".jpg", ".webp")):
            sayac["atlandi"] += 1
            continue
        try:
            veri = islev(t["prompt"], model)
        except KotaBitti as e:
            print(f"Kota/bakiye bitti, duruyorum: {e}", file=sys.stderr)
            sayac["kota"] = True
            break
        except Exception as e:  # tek hata tüm koşuyu durdurmasın
            print(f"{t['id']}: {e}", file=sys.stderr)
            sayac["hata"] += 1
            continue
        (klasor / (t["id"] + uzanti(veri))).write_bytes(veri)
        sayac["uretildi"] += 1
        time.sleep(bekleme)
    return klasor, sayac


def main():
    if len(sys.argv) < 2 or sys.argv[1] not in SAGLAYICILAR:
        sys.exit(__doc__)
    klasor, sayac = calistir(sys.argv[1], sys.argv[2] if len(sys.argv) > 2 else None)
    print(json.dumps(sayac), "→", klasor)
    print(f"Puanlamak için: python3 puanla.py {klasor}")


if __name__ == "__main__":
    main()

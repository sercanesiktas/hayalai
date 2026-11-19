#!/usr/bin/env python3
"""Bir klasördeki görselleri OCR ile okuyup beklenen Türkçe metinle karşılaştırır.

    python3 puanla.py ciktilar/flux-1-schnell

Klasörde testler.json'daki her id için <id>.png (ya da .jpg/.webp) olmalı.
Modelden bağımsız: görselleri API ile de üretebilirsin, bir arayüzden elle
indirip de koyabilirsin.
"""
import difflib
import json
import subprocess
import sys
from pathlib import Path

OZEL = "çğıöşüÇĞİÖŞÜI"  # büyük I da özel: Türkçede ı'nın büyüğü
UZANTILAR = (".png", ".jpg", ".jpeg", ".webp")


def duzle(s):
    """Boşluk ve noktalamayı at, harfleri koru. Büyük/küçük harfi Türkçe kurala göre eşitle."""
    s = s.replace("İ", "i").replace("I", "ı").lower()
    return "".join(c for c in s if c.isalnum())


def benzerlik(beklenen, okunan):
    """0..1, harf harf benzerlik (büyük/küçük harf farkı sayılmaz)."""
    a, b = duzle(beklenen), duzle(okunan)
    if not a:
        return 0.0
    return difflib.SequenceMatcher(None, a, b).ratio()


def kucult(s):
    """Türkçe kurala göre küçült: İ→i, I→ı."""
    return s.replace("İ", "i").replace("I", "ı").lower()


# aksan düşünce okunan harf: ş yerine s, ı yerine i, İ yerine ı (I)
AKSANSIZ = {"ç": "c", "ğ": "g", "ı": "i", "ö": "o", "ş": "s", "ü": "u", "İ": "ı"}


def hizala(a, b):
    """a'nın her harfi için ("esit", None) / ("degisti", b'deki harf) / ("yok", None).

    Düzenleme mesafesi hizalaması; eşitlikte yer değiştirmeyi (substitution) tercih
    eder, böylece "ıİ" → "iI" iki ayrı değişiklik olarak görünür.
    """
    n, m = len(a), len(b)
    d = [[0] * (m + 1) for _ in range(n + 1)]
    for i in range(n + 1):
        d[i][0] = i
    for j in range(m + 1):
        d[0][j] = j
    for i in range(1, n + 1):
        for j in range(1, m + 1):
            d[i][j] = min(d[i - 1][j] + 1, d[i][j - 1] + 1, d[i - 1][j - 1] + (a[i - 1] != b[j - 1]))

    durum = [("yok", None)] * n
    i, j = n, m
    while i > 0 and j > 0:
        maliyet = a[i - 1] != b[j - 1]
        if d[i][j] == d[i - 1][j - 1] + maliyet:
            durum[i - 1] = ("degisti", b[j - 1]) if maliyet else ("esit", None)
            i, j = i - 1, j - 1
        elif d[i][j] == d[i - 1][j] + 1:
            i -= 1
        else:
            j -= 1
    return durum


def ozel_harf(beklenen, okunan):
    """Beklenen metindeki Türkçe özel harflerin ne kadarı doğru okundu.

    dogru: aynı harf yerinde. aksan_dustu: harf var ama noktası/çengeli yok
    (ş yerine s, İ yerine I). Geri kalan: başka bir şey ya da hiç yok.
    Büyük/küçük harf farkı sayılmaz, ama i ile ı birbirine karışırsa sayılır.
    """
    ham = [c for c in beklenen if c.isalnum()]
    a = "".join(kucult(c) for c in ham)
    b = "".join(kucult(c) for c in okunan if c.isalnum())

    toplam = dogru = dustu = 0
    for k, (durum, okunan_harf) in enumerate(hizala(a, b)):
        if ham[k] not in OZEL:                      # küçültmeden önceki asıl harfe göre
            continue
        toplam += 1
        if durum == "esit":
            dogru += 1
        elif durum == "degisti" and okunan_harf == AKSANSIZ.get(ham[k] if ham[k] == "İ" else a[k]):
            dustu += 1
    return {"toplam": toplam, "dogru": dogru, "aksan_dustu": dustu}


def oku(yol, dil="tur"):
    r = subprocess.run(["tesseract", str(yol), "stdout", "-l", dil, "--psm", "6"],
                       capture_output=True, text=True, timeout=60)
    return r.stdout.strip()


def gorsel_bul(klasor, id_):
    for u in UZANTILAR:
        p = Path(klasor) / (id_ + u)
        if p.exists():
            return p
    return None


def puanla(klasor, testler):
    satirlar = []
    for t in testler:
        yol = gorsel_bul(klasor, t["id"])
        if yol is None:
            satirlar.append({**{k: t[k] for k in ("id", "grup", "metin")}, "gorsel": False})
            continue
        okunan = oku(yol)
        oz = ozel_harf(t["metin"], okunan)
        satirlar.append({
            "id": t["id"], "grup": t["grup"], "metin": t["metin"], "gorsel": True,
            "okunan": okunan, "benzerlik": round(benzerlik(t["metin"], okunan), 3),
            "tam": duzle(t["metin"]) == duzle(okunan), **oz,
        })
    return satirlar


def ozet(satirlar):
    var = [s for s in satirlar if s["gorsel"]]
    if not var:
        return {"gorsel": 0}
    oz_top = sum(s["toplam"] for s in var)
    return {
        "gorsel": len(var),
        "eksik": len(satirlar) - len(var),
        "tam_dogru": round(sum(s["tam"] for s in var) / len(var), 3),
        "ortalama_benzerlik": round(sum(s["benzerlik"] for s in var) / len(var), 3),
        "ozel_harf_dogru": round(sum(s["dogru"] for s in var) / oz_top, 3) if oz_top else None,
        "aksan_dustu": round(sum(s["aksan_dustu"] for s in var) / oz_top, 3) if oz_top else None,
    }


def main():
    if len(sys.argv) != 2:
        sys.exit(__doc__)
    klasor = Path(sys.argv[1])
    testler = json.loads((Path(__file__).parent / "testler.json").read_text(encoding="utf-8"))
    satirlar = puanla(klasor, testler)
    sonuc = {"model": klasor.name, "ozet": ozet(satirlar), "satirlar": satirlar}

    cikti = Path(__file__).parent / "sonuclar"
    cikti.mkdir(exist_ok=True)
    (cikti / f"{klasor.name}.json").write_text(json.dumps(sonuc, ensure_ascii=False, indent=2), encoding="utf-8")
    print(json.dumps(sonuc["ozet"], ensure_ascii=False, indent=2))


if __name__ == "__main__":
    main()

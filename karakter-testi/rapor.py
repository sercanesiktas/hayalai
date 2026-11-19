#!/usr/bin/env python3
"""sonuclar/*.json dosyalarını tek bir SONUCLAR.md tablosuna toplar."""
import json
from pathlib import Path

kok = Path(__file__).parent
sonuclar = [json.loads(p.read_text(encoding="utf-8")) for p in sorted((kok / "sonuclar").glob("*.json"))]
sonuclar = [s for s in sonuclar if s["ozet"].get("gorsel")]
sonuclar.sort(key=lambda s: -(s["ozet"].get("ozel_harf_dogru") or 0))

yuzde = lambda x: "-" if x is None else f"%{x * 100:.0f}"

satirlar = ["# Sonuçlar", ""]
if not sonuclar:
    satirlar.append("Henüz puanlanmış model yok. Yöntem için [README](README.md).")
else:
    satirlar += [
        "| Model | Görsel | Tam doğru | Özel harf doğru | Aksan düştü | Benzerlik |",
        "|---|---:|---:|---:|---:|---:|",
    ]
    for s in sonuclar:
        o = s["ozet"]
        satirlar.append(f"| {s['model']} | {o['gorsel']} | {yuzde(o['tam_dogru'])} | {yuzde(o['ozel_harf_dogru'])} | "
                        f"{yuzde(o['aksan_dustu'])} | {o['ortalama_benzerlik']:.2f} |")
    satirlar += ["", "OCR'ın kendi hata payı için [README](README.md#ölçümün-güvenilirliği)."]

(kok / "SONUCLAR.md").write_text("\n".join(satirlar) + "\n", encoding="utf-8")
print("\n".join(satirlar))

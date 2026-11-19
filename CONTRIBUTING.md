# Katkı

## Prompt eklemek

En kolay yol **[hayalai.app](https://hayalai.app)** — üye ol, promptunu
yayınla. Örnek çıktısıyla birlikte vitrinde görünür, istersen satışa da
çıkarırsın.

Veri setine doğrudan eklemek istersen **issue aç** ([prompt önerisi](https://github.com/sercanesiktas/hayalai/issues/new?template=prompt-onerisi.md)
şablonu var). `prompts.csv` ve `promptlar/` dosyaları betiklerle üretiliyor (bkz.
`uretim/`), elle yapılan değişiklik bir sonraki üretimde silinir. Önerini kontrol
edip ekliyorum.

### Prompt neye benzemeli

- **Ne yapacağını söylesin.** "Bir şeyler yaz" değil, "şu formatta, şu
  tonda, şu uzunlukta yaz".
- **Test edilmiş olsun.** Kendi denemediğin promptu ekleme.
- **Yer tutucular köşeli parantezle:** `[konu]`, `[hedef kitle]`.
- Görsel promptlarında **okunabilir yazı isteme** — difüzyon modelleri harf
  basamıyor, çıktı anlamsız şekiller oluyor (bkz. `ISTATISTIK.md`).

## Hata bildirmek

Bozuk prompt, yanlış kategori, yanlış açıklama → issue aç. Hangi prompt
olduğunu ve neyin yanlış olduğunu yaz.

---

Bu depo **veri seti** deposudur: promptlar, Türkçe açıklamaları ve bunları
üreten betikler. HayalAI'ın uygulama kaynağı burada değil.

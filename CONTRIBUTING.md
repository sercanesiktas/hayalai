# Katkı

## Prompt eklemek

En kolay yol **[hayalai.app](https://hayalai.app)** — üye ol, promptunu
yayınla. Örnek çıktısıyla birlikte vitrinde görünür, istersen satışa da
çıkarırsın.

Doğrudan veri setine eklemek istersen:

1. Promptun hangi kategoriye girdiğine bak (`README.md` → Kategoriler)
2. `promptlar/<kategori>.md` dosyasına aşağıdaki biçimde ekle
3. Pull request aç

```markdown
## Promptun adı

> Ne yaptığını anlatan tek cümle. Türkçe.

​```
Promptun tam metni.
​```
```

`prompts.csv` dosyasına elle dokunma — o, markdown dosyalarından üretiliyor
(bkz. `uretim/`).

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

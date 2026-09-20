# Veri setinin sayıları

`prompts.csv` üzerinde ölçüldü — 17.086 kayıt.

## Tür

| Tür | Adet | Pay |
|---|---:|---:|
| `image` — görsel üretimi | 14.947 | %87,5 |
| `text` — sohbet asistanı | 2.139 | %12,5 |

## Kategori

| Kategori | Adet |
|---|---:|
| Görsel | 14.947 |
| Metin | 1.813 |
| Kod | 159 |
| Web | 57 |
| Video | 33 |
| Pazarlama | 31 |
| Ses | 21 |
| Tasarım | 15 |
| Mobil | 10 |

Kategori promptun **başlığından** seçiliyor, gövdesinden değil. Gövdede
aramak denendi ve felaketti: "Florist" promptunun metninde *design*
geçtiği için tasarıma, "Chemical Reactor" gövdesinde *html* geçtiği için
web'e düşüyordu. Başlık, promptun ne olduğunu söyleyen tek güvenilir alan.

## Önerilen araç

| Araç | Adet |
|---|---:|
| ChatGPT (görsel) | 10.444 |
| Gemini (görsel) | 4.300 |
| ChatGPT | 2.139 |
| Midjourney | 184 |
| Firefly | 10 |
| Stable Diffusion | 9 |

Hiçbir prompt "fark etmez" ile bırakılmadı — her birine uygun bir araç
atandı, uygun bulunmayanlar ChatGPT'ye yönlendirildi.

## Prompt uzunluğu

| | Karakter |
|---|---:|
| En kısa | 17 |
| %25 | 528 |
| **Ortanca** | **1.157** |
| %75 | 2.218 |
| %90 | 2.950 |
| %99 | 6.603 |
| En uzun | 51.232 |

Toplam **24,6 MB** prompt metni.

Bu dağılımın pratik bir sonucu var: en uzun promptlar birçok servisin
sınırını aşıyor. Cloudflare `flux-1-schnell` `prompt` alanını 2.048
karakterle sınırlıyor; Pollinations klasik promptu adresin içine koyduğu
için uzun metinde HTTP 500 dönüyor. Yani promptların yaklaşık **%25'i**
kırpılmadan gönderilemiyor.

Bir de sessiz bir tuzak: MySQL'de `TEXT` 65.535 **bayt** ve katı olmayan
kipte sessizce kırpıyor. Ölçüldü — 69.145 baytlık bir prompt 3.609 bayt
olarak kaydedildi. Bu veri setiyle çalışacaksan `MEDIUMTEXT` kullan.

## Difüzyonun beceremediği promptlar

14.947 görsel promptun **2.989'u (%20)** okunabilir yazı istiyor:
infografik, afiş, logo, arayüz ekranı, tablo, altyazı…

Difüzyon modelleri harf basamıyor; bu promptlarda çıktı her seferinde
harfe benzeyen ama hiçbir şey demeyen şekillerle doluyor. Otomatik örnek
görsel üretirken bunları elemek gerekiyor — bozuk bir örnek, örneksiz
bırakmaktan kötü.

Ölçümde kullanılan kalıp:

```
infographic · poster · flyer · thumbnail · banner · slide · presentation
brochure · magazine cover · book cover · logo · wordmark · typography
text overlay · caption · headline · chart · diagram · menu · invoice
certificate · resume · newspaper · comic · manga · storyboard · subtitle
label · packaging · billboard · ui · ux · app screen · dashboard
website · landing page · mockup
```

Geriye kalan **11.958** prompt sahne, portre ve ürün işi — modellerin iyi
olduğu alan.

---

[← README](README.md)

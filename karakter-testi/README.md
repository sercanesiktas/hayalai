# Türkçe karakter görsel testi

Görsel üretim modelleri `ç ğ ı ö ş ü İ` harflerini doğru yazabiliyor mu? Bir tabelaya
"Şişli" yazdırdığında "Sisli" çıkıyor mu, `ı` ile `i` karışıyor mu?

[ISTATISTIK.md](../ISTATISTIK.md) içinde difüzyon modellerinin okunur yazı basmakta zorlandığını
ölçmüştük (görsel promptların %20'si yazı istiyor). Bu klasör aynı soruyu Türkçeye özel olarak soruyor ve
modeller arasında karşılaştırılabilir bir sayı veriyor.

**Durum:** test seti, puanlayıcı ve üretici hazır ve test edildi. Gerçek bir modelin sonucu henüz
yok, çünkü API anahtarı gerekiyor. Sonuçlar [SONUCLAR.md](SONUCLAR.md) içinde birikir.

## Nasıl çalışır

1. [`testler.json`](testler.json): 20 test. Tek harf dizileri, kelimeler, büyük harfli kelimeler,
   `i`/`ı` çiftleri ve cümleler. Hepsi aynı tabela promptu şablonuyla soruluyor.
2. Her test için bir görsel üretilir.
3. [`puanla.py`](puanla.py) görseli Tesseract ile (Türkçe dil verisi) okur ve beklenen metinle karşılaştırır.

Her görsel için üç sayı çıkar:

| Ölçüt | Anlamı |
|---|---|
| Tam doğru | Okunan metin beklenenle harfi harfine aynı (büyük/küçük harf farkı sayılmaz) |
| Özel harf doğru | Beklenen metindeki `ç ğ ı ö ş ü İ I` harflerinin kaçı yerinde ve doğru |
| Aksan düştü | Harf var ama noktası ya da çengeli yok: `ş` yerine `s`, `İ` yerine `I`. Modelin en sık yaptığı hata bu olması bekleniyor |

## Kullanım

Gereken: Python 3.9+, `tesseract-ocr` ve Türkçe dil verisi (`apt install tesseract-ocr tesseract-ocr-tur`).
Başka paket gerekmiyor.

**Görselleri API ile üret:**

```bash
CLOUDFLARE_ACCOUNT_ID=... CLOUDFLARE_API_TOKEN=... python3 uret.py cloudflare
GEMINI_API_KEY=...                                  python3 uret.py gemini
```

**Ya da elle:** ChatGPT, Midjourney gibi bir arayüzde `testler.json` içindeki promptları çalıştırıp
görselleri `ciktilar/<model-adı>/<test-id>.png` olarak kaydet (`harf-01.png`, `kelime-05.png`…).

**Puanla ve raporla:**

```bash
python3 puanla.py ciktilar/<model-adı>
python3 rapor.py
```

Üretici kota ya da bakiye bitince (HTTP 402/429) durur ve kaldığı yerden devam eder.

## Ölçümün güvenilirliği

OCR'ın kendisi de hata yapabilir. Puanlayıcıyı sentetik görsellerle sınadık: aynı 20 metin
DejaVu Sans Bold ile kusursuz çizildi.

| Kontrol | Tam doğru | Özel harf doğru | Aksan düştü |
|---|---:|---:|---:|
| Doğru metin | %100 | %100 | %0 |
| Aksanı elle düşürülmüş metin (ş→s, ı→i…) | %0 | %6 | %94 |

Yani puanlayıcı doğruyu, aksan kaybını ve anlamsız metni ayırt ediyor. Sınırı şu: bu temiz, düz,
yüksek kontrastlı bir yazı. Gerçek model görsellerinde yazı eğik, dokulu ya da süslü olabilir ve OCR
orada kendi başına hata yapar. Bir modelin düşük çıkması her zaman modelin hatası demek değil.
Şüpheli sonuçlarda `sonuclar/<model>.json` içindeki `okunan` alanına ve görselin kendisine bak.

İzole tek harfler (`ı`, `İ`) OCR için okunaksız, o yüzden tek-harf testleri harf dizisi olarak yazıldı.

## Bilmediklerimiz

- `uret.py` içindeki Cloudflare ve Gemini istekleri API anahtarı olmadığı için gerçek servise
  gönderilemedi. Yanıt ayrıştırması sahte yanıtlarla test edildi, istek biçimi
  [SAGLAYICI-NOTLARI.md](../SAGLAYICI-NOTLARI.md) ve resmi belgelere göre yazıldı. İlk gerçek
  çalıştırmada bir şey tutmazsa hata mesajı servisin kendi cevabını gösterir.
- Gemini için varsayılan model `gemini-3.1-flash-image-preview`; adı değişmiş olabilir,
  `python3 uret.py gemini <model-adı>` ile verebilirsin.
- 20 test küçük bir örneklem. Bir modelin sonucu tek koşuya bağlı, aynı testi birkaç kez
  çalıştırıp ortalamak daha sağlam olur.

## Test

Sentetik görsel çizmek için Pillow gerekir (`pip install pillow`), yalnızca testlerde.

```bash
python3 -m unittest discover -s test
```

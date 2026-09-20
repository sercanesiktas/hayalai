# Veri seti nasıl üretiliyor

Bu klasör `prompts.csv` ve `promptlar/` dosyalarını üreten betikleri
taşıyor. Amaç veri setinin **yeniden üretilebilir** olması: sayılar nereden
geldi, kategori neye göre seçildi, açıklama nasıl yazıldı — hepsi burada.

## Betikler

| Dosya | İşi |
|---|---|
| `1-cozumle.php` | prompts.chat CSV'sini (CC0) satırlara çevirir |
| `3-gorsel-cozumle.php` | Görsel prompt kataloğunu (MIT) satırlara çevirir |
| `gorsel-yardimcilar.php` | Araç seçimi, Türkçe açıklama, görev çıkarımı |
| `Onizleme.php` | Kart önizlemesini okunur hâle getirir |
| `5-birlesik-sql.php` | Satırları tek bir SQL dosyasına yazar |

```
php 1-cozumle.php        <calisma-klasoru> prompts.csv
php 3-gorsel-cozumle.php <calisma-klasoru> gorsel-katalog.json
php 5-birlesik-sql.php   <calisma-klasoru>
```

## Üç karar, üç gerekçe

**Kategori başlıktan seçiliyor, gövdeden değil.** Gövdede anahtar kelime
aramak denendi: "Florist" promptunun metninde *design* geçtiği için
tasarıma, "Chemical Reactor" gövdesinde *html* geçtiği için web'e
düşüyordu. Başlık, promptun ne olduğunu söyleyen tek güvenilir alan.

**Açıklama promptun ne YAPTIĞINI söylüyor.** İlk sürüm şablon cümle
kuruyordu — *"'LinkedIn: Recommendation request' rolünü üstlenen prompt"*.
Bu, promptun adını tekrar etmekten başka bir şey değildi. Şimdi 46 kalıplı
bir görev çıkarımı var: metin "analiz et" mi diyor, "yeniden yaz" mı,
"planla" mı — açıklama onu söylüyor. Şablona düşme oranı %33'ten %21'e
indi.

**Alan etiketi kaldırıldı.** Promptun hangi sektöre ait olduğunu metinden
çıkarmayı denedik ve kendinden emin biçimde yanlış sonuçlar verdi:
"Ethereum Developer" → *Hukuk* (metinde *smart contract* geçiyor diye),
Hac planlama promptu → *Güvenlik* (metinde *security* geçiyor diye).
Ölçülüp çıktıdan kaldırıldı. Yanlış etiket, etiketsizlikten kötüdür.

## Kaynaklar ve lisans

Prompt metinleri açık kataloglardan geldi: metin promptları
[prompts.chat](https://github.com/f/awesome-chatgpt-prompts) (CC0 1.0),
görsel promptları MIT lisanslı bir katalogdan.

Türkçe açıklamalar, kategori ve araç atamaları bu betiklerin ürünü.

---

[← README](../README.md)

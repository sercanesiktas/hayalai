# Veri seti nasıl üretiliyor

Bu klasördeki betikler `prompts.csv`, `promptlar/` ve `docs/arama.json`
dosyalarını üretir. Sayıların nereden geldiği, kategorinin neye göre
seçildiği, açıklamanın nasıl yazıldığı burada görülebilir.

PHP 8.1 ya da üstü yeter, ek paket gerekmiyor.

## Akış

```
prompts.chat CSV ──► 1-cozumle.php ──────────┐
                                             ├─► 4-yayinla.php ─► prompts.csv
görsel katalog ───► 3-gorsel-cozumle.php ────┘                    promptlar/*.md
                                                                  docs/arama.json
```

| Dosya | İşi |
|---|---|
| `1-cozumle.php` | prompts.chat CSV'sini (CC0) satırlara çevirir |
| `3-gorsel-cozumle.php` | Görsel prompt kataloğunu (MIT) satırlara çevirir, müstehcen olanları eler |
| `gorsel-yardimcilar.php` | Araç seçimi, Türkçe açıklama, görev çıkarımı |
| `4-yayinla.php` | İki kataloğu birleştirir, CSV'yi, markdown dosyalarını ve arama dizinini yazar |
| `gunun-promptu.php` | Günün promptunu seçer, README'yi ve `gunun-promptu/` arşivini günceller |

```
php 1-cozumle.php        <calisma-klasoru> prompts.csv
php 3-gorsel-cozumle.php <calisma-klasoru> <katalog>/references
php 4-yayinla.php        <calisma-klasoru>
```

`4-yayinla.php` ikinci argüman olarak depo kökünü alabilir, vermezsen
bu klasörün bir üstüne yazar.

## Üç karar

**Kategori başlıktan seçiliyor, gövdeden değil.** Gövdede anahtar kelime
aramak denendi: "Florist" promptunun metninde *design* geçtiği için
tasarıma, "Chemical Reactor" gövdesinde *html* geçtiği için web'e
düşüyordu. Başlık, promptun ne olduğunu söyleyen tek güvenilir alan.

**Açıklama promptun ne yaptığını söylüyor.** İlk sürüm şablon cümle
kuruyordu: *"'LinkedIn: Recommendation request' rolünü üstlenen prompt"*.
Bu, adı tekrar etmekten başka bir şey değildi. Şimdi 46 kalıplı bir görev
çıkarımı var: metin "analiz et" mi diyor, "yeniden yaz" mı, "planla" mı,
açıklama onu söylüyor. Şablona düşen oranı %33'ten %21'e indi.

**Alan etiketi kaldırıldı.** Promptun hangi sektöre ait olduğunu metinden
çıkarmayı denedik ve kendinden emin biçimde yanlış sonuçlar verdi:
"Ethereum Developer" → *Hukuk* (metinde *smart contract* geçiyor diye),
hac planlama promptu → *Güvenlik* (metinde *security* geçiyor diye).
Yanlış etiket, etiketsizlikten kötüdür.

## Bilinen sınırlar

- Açıklamalar anahtar kelimeyle çıkarılıyor, çeviri değil. Bu yüzden bazı
  promptlarda görev cümlesi yanlış olabiliyor. Yanlış bir tanım gördüysen
  issue aç.
- Görsel promptların yaklaşık yarısının açıklaması aynı kalıpta ("fotogerçekçi
  portre üretmek için hazır prompt"). Metinden çıkarılabilen ayrıntı bu kadar.
- Müstehcen içerik süzgeci kelime taramasıdır, kalanın tamamen temiz olduğunu
  garanti etmez.
- 65.000 baytı aşan promptlar veri setine alınmıyor.

## Kaynaklar ve lisans

Metin promptları [prompts.chat](https://github.com/f/awesome-chatgpt-prompts)
(CC0), görsel promptlar
[YouMind-OpenLab/ai-image-prompts-skill](https://github.com/YouMind-OpenLab/ai-image-prompts-skill)
(MIT). Lisans metinleri için [LISANS-KAYNAKLAR.md](../LISANS-KAYNAKLAR.md).

---

[← README](../README.md)

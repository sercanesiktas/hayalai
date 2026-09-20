<p align="center">
  <a href="README.md">← HayalAI</a> ·
  <a href="ISTATISTIK.md">Veri setinin sayıları</a>
</p>

# Saha notları: görsel üretim sağlayıcıları

Sayfanın geri kalanı bunu yaparken öğrendiklerimiz. Her sayı gerçek bir
API yanıtından ya da gerçek bir faturalandırma sayfasından geldi.
Bulguların birkaçı dokümanların ima ettiğinin tersi.


---

## 1. Her görselden görsele model yüzü koruyamıyor

En çok vakit yakan bulgu bu. Bir fotoğraf yükleyip "aynı kişi, takım
elbiseyle, ofiste" dediğinde sonuç tamamen modele bağlı — ve beceremeyen
modeller bunu sessizce beceremiyor. HTTP 200 ile, güzel ışıklı,
profesyonel görünen bir fotoğraf döndürüyorlar: **başka birinin
fotoğrafını.**

| Model | Kimliği koruyor mu | Kanıt |
|---|---|---|
| `@cf/black-forest-labs/flux-2-klein-9b` | **Hayır** | Aynı kaynak fotoğrafla iki ayrı denemede iki farklı adam çıktı |
| `gemini-2.5-flash-image` (Nano Banana) | Evet | Özneyi koruyan düzenleme için yapılmış |
| FLUX.1 Kontext (Pollinations üzerinden) | Evet | Özneyi koruyan düzenleme için tasarlanmış |

Hiçbir prompt mühendisliği FLUX.2'yi düzeltmedi. Açık bir yasak listesi
denendi — *"yüzü yeniden çizme, güzelleştirme, inceltme, pürüzsüzleştirme;
kemik yapısı, gözler, kaşlar, burun, ağız, çene hattı, kulaklar, saç
çizgisi, ten rengi, sakal, yaş ve ifade kaynaktaki gibi kalacak"* — model
sahneyi yeniden çizerken yüzü de yeniden çizmeye devam etti.

**Asıl tehlike yedeğe düşmekte.** Kimliği koruyan bir modelden korumayan
birine sessizce düşen bir zincir, yabancı bir yüz üretip "başardım"
diyor. Sağlayıcıları açıkça işaretle:

```php
'cloudflare_kontext' => [
    'kimlik_korur' => false,   // ölçüldü, tahmin değil
],
'gemini_kontext' => [
    'kimlik_korur' => true,
],
```

…ve fotoğraflı modda koruyamayanları hiç deneme. Açık bir hata, inandırıcı
bir yanlış cevaptan iyidir.

---

## 2. Difüzyon modelleri okunabilir yazı basamıyor

Sonradan bakınca aşikâr, pratikte pahalı. 14.000 promptluk bir kataloğa
kapak ürettik ve afiş, infografik, logo ya da arayüz isteyen her promptta
harfe benzeyen ama hiçbir şey demeyen şekillerle dolu sayfalar geldi.

Katalogun ne kadarını etkilediğini ölçtük:

```
yazı/arayüz ağırlıklı (infografik, afiş, logo, arayüz, …):  2.989 / 14.947  (%20)
sahne / portre / ürün (modelin iyi olduğu):                11.958
```

Çözüm daha iyi bir prompt değil, eleme kuralı. Bozuk bir kapak promptu
yanlış tanıtır — kapaksız bırakmak daha dürüst.

---

## 3. Ücretsiz katmanlar, ölçülmüş hâliyle

| Sağlayıcı | Ücretsiz hak | Bitince ne oluyor |
|---|---|---|
| Cloudflare Workers AI | Günde 10.000 neuron | HTTP 429, her gün 00:00 UTC'de yenileniyor |
| Pollinations | Üretim için yok | HTTP 402, "Insufficient balance" |
| Gemini görsel API | Yok | HTTP 429, "exceeded your current quota" |

**Google One / Gemini uygulaması aboneliği API kotası vermiyor.** Tüketici
uygulaması (`gemini.google.com`) ile API (`generativelanguage.googleapis.com`)
ayrı faturalandırılıyor. Sınırı kaldıran şey, anahtarın bağlı olduğu Google
Cloud projesinde faturalandırmayı açmak.

---

## 4. Maliyet, ölçülmüş hâliyle

**Cloudflare `flux-1-schnell`, 512×512, 4 adım:** görsel başına ~43 neuron,
1.000 neuron $0,011 → **görsel başına ~$0,0005**. 14.000 katalog kapağı
toplam **~$7**.

Çözünürlük göründüğünden önemli: Cloudflare 512×512 karo başına
ücretlendiriyor, yani 1024×1024 dört karo demek — ekranda 273 piksel
genişliğinde duran bir kapak için dört katı maliyet.

**Gemini 2.5 Flash Image:** 1024×1024'e kadar bir çıktı görseli 1.290
token, çıkış tokeni 1M başına $30 → **görsel başına ~$0,039**, yani
Cloudflare'in kabaca 80 katı. Bu farkı kimliğin korunması için ödüyorsun.

⚠️ `gemini-2.5-flash-image` **2 Ekim 2026'da** emekliye ayrılıyor. Halefi:
`gemini-3.1-flash-image-preview`.

---

## 5. Hız sınırı, kota değildir

Pollinations `429 Too Many Requests` dönüyor ve mesajı şu:
`"Queue full for IP: 1 requests already queued (max: 1)"`. Bu **eşzamanlılık**
sınırı, günlük kota değil — bir önceki isteğin bitmeden yenisinin vardığı
anlamına geliyor.

O sağlayıcıyı kotadan değil **hızdan** kaybediyorduk. İstekler arasına
birkaç saniye koyunca geri geldi. Toplu işlerde arka arkaya giden istekler
bu duvara hemen çarpıyor.

---

## 6. Kota tespiti: doğru soruyu sor

Zincirde "bütün sağlayıcıların hakkı doldu, denemeyi kes" kuralı vardı.
Anahtar kelime listesinde `429` vardı ama `402` yoktu. Üçüncü sağlayıcı
`402 Insufficient balance` dönmeye başlayınca kural hiç tetiklenmedi ve
gece boyu çalışan iş binlerce promptu tek tek deneyip her birinde aynı üç
duvara çarptı. Yüzlerce aynı log satırı, sıfır görsel.

Kuralın sorması gereken soru *"bu hata geçici mi"* değil:

> **Sıradakini denemek bir şey değiştirir mi?**

Kota bittiyse hayır. Bakiye bittiyse hayır. İkisi de işi durdurmalı.

---

## 7. Saatlere mal olan tuzaklar

**`php artisan config:cache` `env()`'i `null` yapıyor.** Yapılandırma
önbelleğe alınınca Laravel `.env` dosyasını hiç okumuyor; yapılandırma
dosyası dışındaki her `env()` çağrısı sessizce null dönüyor. Ölçüldü:
önbellek kapalı → değer, açık → null. Sırları her zaman `config()`
üzerinden oku.

**`Http::fake()` HTTP metodunu yok sayıyor.** Sahte yanıt GET ve POST'a
aynı şekilde cevap veriyor; POST bekleyen bir uca GET atan sağlayıcı tanımı
bütün testleri geçip canlıda HTTP 400 veriyor. Metodu açıkça doğrula:

```php
$this->assertSame('POST', $istek->method());
```

**`public_path()` web ile komut satırında farklı.** Belge kökü uygulamanın
`public/` klasörü olmadığında (paylaşımlı hosting), web isteği doğru yolu
`index.php` içindeki `usePublicPath()` ile biliyor ama artisan komutları
bilmiyor:

```
WEB  public_path(): /home/kullanici/public_html
CLI  public_path(): /home/kullanici/uygulama/public
```

Komut satırının ürettiği görseller sitenin hiç servis etmediği bir klasöre
düştü. Veritabanındaki adres doğru, dosya başka yerde — sayfada kırık
görsel, komutta "tamam" yazısı.

**MySQL'de `TEXT` 65.535 *bayt*,** ve katı olmayan kipte sessizce kırpıyor.
Ölçüldü: 69.145 baytlık bir prompt 3.609 bayt olarak kaydedildi.
`MEDIUMTEXT` kullan ya da yazmadan önce uzunluğu doğrula.

**`LIKE ... ESCAPE '\'` MySQL'de sözdizimi hatası** — ters bölü kapanış
tırnağını kaçırıyor. SQLite'ta sorunsuz çalıştığı için test takımı yeşil
kalıyor, canlı HTTP 500 dönüyor. Başka bir kaçış karakteri kullan:

```sql
LIKE '%kelime%' ESCAPE '!'
```

**`LIKE` içindeki Türkçe karakterler sessizce hiçbir şey eşleştirmiyor**
— bağlantı `utf8mb4` değilse. Hata yok, sadece sıfır satır.

---

## 8. Sağlayıcı zincirinin şekli

Bütün bunlardan sağ çıkan desen:

```php
return [
    'metin_sirasi'   => ['cloudflare_metin', 'pollinations', 'pollinations_gen'],
    'kontext_sirasi' => ['gemini_kontext', 'cloudflare_kontext', 'pollinations_gen'],

    'saglayicilar' => [
        'cloudflare_metin' => [
            'anahtar'         => 'services.cloudflare_ai.token',
            'anahtar_zorunlu' => ['metin'],
            'yontem'          => 'POST',   // yazılmazsa GET'e düşüyor — bkz. §7
            'kimlik_korur'    => false,
            'adres'           => 'https://api.cloudflare.com/client/v4/accounts/{hesap}/ai/run/{model}',
            'govde'           => ['prompt' => '{prompt}', 'steps' => 4],
            'yanit_bicimi'    => 'json_base64',
            'yanit_yolu'      => 'result.image',
        ],
    ],
];
```

Tutulmaya değer kurallar:

- Anahtarı olmayan sağlayıcı **atlanıyor** ve sebebi kaydediliyor — bu bir
  düşüş değil, hiç denenmemiş bir satır. Düşüş sayılırsa "her şey kapalı"
  kuralı hiç tetiklenmiyor.
- Servisin **kendi** hata metnini logla, senin özetini değil. `"HTTP 400"`
  hiçbir şey anlatmıyor; gövde her şeyi anlatıyor.
- Kendi loglamanı da sınırla. Bütün sağlayıcılar kapalıyken gece boyu
  çalışan iş saniyede bir 1,5 KB'lık aynı kaydı yazıyor. Paylaşımlı
  hostingde dolan disk siteyi komple durdurur — loglamaya çalıştığın
  arızadan büyük bir arıza.

---


---

---

<p align="center">
  <a href="https://hayalai.app"><b>hayalai.app</b></a> yapılırken tutuldu
</p>

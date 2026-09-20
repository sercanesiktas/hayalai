<?php

/**
 * Görsel prompt kataloğu için araç ataması ve TÜRKÇE açıklama üretimi.
 *
 * NEDEN ÇEVİRİ DEĞİL, YENİDEN YAZIM: kaynak açıklamalar İngilizce ve
 * 14 binden fazla. Makine çevirisi için buradan bir servise
 * ulaşılamıyor; ulaşılsaydı bile "A prompt for generating…" kalıbının
 * birebir çevirisi Türkçede kötü duruyor. Bunun yerine açıklama
 * promptun KENDİ İÇERİĞİNDEN türetiliyor: ne ürettiği, hangi üslupta
 * olduğu ve referans görsel isteyip istemediği metinden okunup Türkçe
 * cümleye dönüştürülüyor. Böylece açıklama hem Türkçe hem de gerçekten
 * o promptu anlatıyor.
 */

/** Başlık/içerikten hedef aracı çıkarır. Bulunamazsa ChatGPT. */
function aracSec(string $metin): string
{
    $m = mb_strtolower($metin);

    /* SIRA ÖNEMLİ: "nano banana" Gemini'nin görsel modelinin yaygın
       adı; "flux" ve "seedream" açık ağırlıklı modeller, Stable
       Diffusion arayüzlerinde çalışıyor. */
    $ipuclari = [
        'gemini-gorsel'    => '/nano ?banana|gemini|imagen|\bveo\b/u',
        'midjourney'       => '/midjourney|--ar |--v \d|\bniji\b/u',
        'firefly'          => '/adobe firefly|\bfirefly\b/u',
        'ideogram'         => '/ideogram/u',
        'leonardo'         => '/leonardo\.ai|leonardo ai/u',
        'stable-diffusion' => '/stable diffusion|sdxl|\bflux\b|comfyui|automatic1111|seedream|qwen[- ]image/u',
        'chatgpt-gorsel'   => '/dall[- ]?e|gpt[- ]?image|chatgpt|openai/u',
    ];

    foreach ($ipuclari as $arac => $kalip) {
        if (preg_match($kalip, $m)) {
            return $arac;
        }
    }

    /* "Fark etmez / diğer" KULLANILMIYOR. O seçenek seçildiğinde prompt
       detayında hiçbir "şurada dene" düğmesi basılmıyor — kullanıcı
       promptu alıp nereye götüreceğini bilmeden kalıyor. Adı geçen bir
       araç yoksa ChatGPT'ye yönlendiriliyor: hem görsel üretiyor hem de
       promptu adrese taşıyan derin bağlantısı var. */
    return 'chatgpt-gorsel';
}

/** Metinden konu ve üslup okuyup Türkçe bir tanım cümlesi kurar. */
function turkceTanim(string $metin): string
{
    $m = mb_strtolower($metin);

    // Ne üretiyor — ilk eşleşen kazanıyor, en belirgin olandan başlayarak.
    $konular = [
        '/youtube thumbnail|thumbnail/u'                  => 'YouTube küçük resmi',
        '/\blogo\b|brand mark|wordmark/u'                 => 'logo',
        '/infographic|diagram|chart design/u'             => 'bilgi grafiği',
        '/storyboard|comic (?:panel|page|strip)|manga/u'  => 'çizgi roman karesi',
        '/\bavatar\b|profile (?:picture|photo|image)|pfp/u' => 'profil görseli',
        '/poster|flyer|billboard/u'                       => 'afiş',
        '/mockup|mock-up/u'                               => 'ürün maketi (mockup)',
        '/\bui\b|\bux\b|app screen|landing page|web design|interface/u' => 'arayüz tasarımı',
        '/game (?:asset|character|icon)|sprite|pixel art/u' => 'oyun görseli',
        '/product (?:photo|photography|shot|image)|packshot/u' => 'ürün fotoğrafı',
        '/food photography|dish|cuisine|dessert|beverage/u' => 'yemek görseli',
        '/fashion|runway|lookbook|streetwear/u'            => 'moda çekimi',
        '/interior|architect|building|room design/u'      => 'mimari görsel',
        '/landscape|scenery|nature shot|mountain|forest/u' => 'manzara',
        '/isometric|diorama|miniature|3d render|\b3d\b/u' => '3B sahne',
        '/portrait|headshot|selfie/u'                     => 'portre',
        '/illustration|cartoon|anime|painting|artwork/u'  => 'illüstrasyon',
    ];

    $konu = 'görsel';
    foreach ($konular as $kalip => $ad) {
        if (preg_match($kalip, $m)) { $konu = $ad; break; }
    }

    // Üslup — birden fazlası birikebilir, en fazla ikisi yazılıyor.
    $usluplar = [
        '/photorealistic|hyper[- ]?realistic|ultra[- ]?realistic|photoreal/u' => 'fotogerçekçi',
        '/cinematic|film still|movie/u'   => 'sinematik',
        '/minimal|clean|simple/u'         => 'minimal',
        '/vintage|retro|90s|80s|nostalgi/u' => 'retro',
        '/watercolor|oil painting|sketch|hand[- ]drawn/u' => 'elle çizilmiş',
        '/neon|cyberpunk|futuristic|sci[- ]?fi/u' => 'fütüristik',
        '/luxury|premium|high[- ]end|elegant/u' => 'lüks',
        '/studio (?:light|lighting|shot)/u' => 'stüdyo ışıklı',
    ];

    $bulunan = [];
    foreach ($usluplar as $kalip => $ad) {
        if (preg_match($kalip, $m)) { $bulunan[] = $ad; }
        if (count($bulunan) === 2) { break; }
    }

    $uslup = $bulunan ? implode(', ', $bulunan) . ' ' : '';

    return trim($uslup . $konu);
}

/**
 * METİN PROMPTU NE YAPIYOR — Türkçe tanım.
 *
 * NEDEN: açıklamalar "X rolünü üstlenen prompt. Sohbet asistanlarına
 * verilmek üzere yazılmış." diyordu; bu cümle hiçbir şey anlatmıyor,
 * her promptta aynı ve alıcıya promptun ne işe yaradığını söylemiyor.
 *
 * Çeviri yapılamıyor (bu ortamdan çeviri servisine ulaşılamıyor), o
 * yüzden tanım promptun KENDİ METNİNDEN çıkarılıyor: hangi işi yaptığı
 * (görev) ve hangi alanda çalıştığı (alan) anahtar kelimelerden okunup
 * Türkçe cümle kuruluyor.
 */
function metinGorevi(string $metin): string
{
    $m = mb_strtolower($metin);

    /* SIRA ÖNEMLİ: en belirgin işten en genele. Bir prompt hem
       "review" hem "write" içerebiliyor; önce hangisi asıl işse o. */
    $gorevler = [
        '/\btranslat(e|or|ion)\b/u'                                  => 'çeviri yapar',
        '/\bproofread|grammar|spelling|correct the text\b/u'          => 'metni dilbilgisi yönünden düzeltir',
        '/\bsummar(y|ize|ise)\b/u'                                    => 'özet çıkarır',
        '/\bdebug|fix the (bug|code|error)|error message\b/u'         => 'hata ayıklar',
        '/\brefactor|optimi[sz]e|performance\b/u'                     => 'iyileştirme önerir',
        '/\b(code )?review|critique|evaluate|assess\b/u'              => 'inceleyip değerlendirir',
        '/\bunit test|write tests|test cases\b/u'                     => 'test yazar',
        '/\binterview(er)?\b/u'                                       => 'mülakat sorusu sorar',
        '/\bteach|explain|tutor|lesson|curriculum\b/u'                => 'konuyu anlatır ve öğretir',
        '/\bterminal|console|compiler|interpreter|emulat\w+\b/u'      => 'komut çıktısı taklit eder',
        '/\bsql|database quer(y|ies)\b/u'                             => 'sorgu yazar',
        '/\bregex|regular expression\b/u'                             => 'düzenli ifade üretir',
        '/\bseo|keyword research|meta description\b/u'                => 'arama motoru için içerik çıkarır',
        '/\bcold email|outreach|sales email\b/u'                      => 'satış e-postası yazar',
        '/\bad copy|advertis|campaign|marketing\b/u'                  => 'reklam metni yazar',
        '/\bproduct description|listing\b/u'                          => 'ürün açıklaması yazar',
        '/\bsocial media|instagram|tiktok|twitter|linkedin post\b/u'  => 'sosyal medya içeriği üretir',
        '/\bresume|\bcv\b|cover letter\b/u'                           => 'özgeçmiş ve başvuru metni hazırlar',
        '/\bbusiness plan|strategy|roadmap|okr\b/u'                   => 'plan ve strateji çıkarır',
        '/\bbrainstorm|idea generator|come up with ideas\b/u'         => 'fikir üretir',
        '/\bname (generator|suggestion)|brand name|naming\b/u'        => 'isim önerir',
        '/\bstory|screenplay|novel|poem|lyrics\b/u'                   => 'yaratıcı metin yazar',
        '/\brecipe|cook\b/u'                                          => 'tarif verir',
        '/\bworkout|fitness|diet|nutrition\b/u'                       => 'program çıkarır',
        '/\btravel|itinerary|trip plan\b/u'                           => 'gezi planı hazırlar',
        '/\bextract|parse|convert|format (the )?(lines|data|text)\b/u' => 'veriyi ayıklayıp biçimlendirir',
        '/\bclassify|categori[sz]e|label\b/u'                         => 'sınıflandırma yapar',
        '/\bgame|play as|roleplay|role-play\b/u'                      => 'oyun/rol canlandırması yürütür',
        '/\banalyz|analys|report on|insight\b/u'                      => 'analiz yapar',
        '/\bwrite|draft|compose|generate (a |an )?(text|article|post)\b/u' => 'metin yazar',
        /* Aşağıdakiler ikinci turda eklendi: ilk ölçümde promptların
           %33'ü genel kalıba düşüyordu, yani açıklama yine hiçbir şey
           anlatmıyordu. Bunlar o yığının içinden çıkan gerçek kalıplar. */
        '/\bchecklist|step[- ]by[- ]step|instructions\b/u'          => 'adım adım yönerge çıkarır',
        '/\bcompare|versus|pros and cons|trade[- ]?off\b/u'         => 'karşılaştırma yapar',
        '/\brewrite|rephrase|paraphrase|improve the (text|writing)\b/u' => 'metni yeniden yazar',
        '/\bquestions? (to|for)|ask me|quiz\b/u'                    => 'soru sorarak ilerler',
        '/\btranscri(be|pt)|caption|subtitle\b/u'                   => 'konuşmayı yazıya döker',
        '/\bprompt (engineer|generator|optimi)/u'                    => 'başka promptlar üretir',
        '/\bjson|yaml|schema|api (spec|design)\b/u'                 => 'yapılandırılmış çıktı üretir',
        '/\bdocument(ation)?|readme|changelog\b/u'                  => 'belge hazırlar',
        '/\barchitect|system design|scalab\w+/u'                    => 'mimari tasarım önerir',
        '/\bpersona|character|act as a (person|friend|coach)\b/u'   => 'belirli bir karakter olarak konuşur',
        '/\bnegotiat|persuade|convince\b/u'                         => 'ikna metni kurar',
        '/\bsimulat|pretend|imagine you are\b/u'                    => 'durum canlandırması yapar',
        '/\bresearch|find sources|cite\b/u'                         => 'araştırma yapar',
        '/\bdecision|recommend|advice|consult\b/u'                  => 'öneri ve tavsiye verir',
        '/\bcalculat|compute|formula|math\b/u'                      => 'hesaplama yapar',
    ];

    foreach ($gorevler as $kalip => $ad) {
        if (preg_match($kalip, $m)) {
            return $ad;
        }
    }

    return 'verilen konuda uzman gibi cevap verir';
}

/** Promptun çalıştığı alan — bulunamazsa boş döner. */
function metinAlani(string $metin): string
{
    $m = mb_strtolower($metin);

    $alanlar = [
        '/\bpython\b/u'                       => 'Python',
        '/\bjavascript|typescript|react|node\b/u' => 'JavaScript',
        '/\bphp\b|laravel/u'                  => 'PHP',
        '/\bsql\b|postgres|mysql/u'           => 'veritabanı',
        '/\blinux|bash|shell\b/u'             => 'Linux',
        '/\bexcel|spreadsheet|google sheets\b/u' => 'Excel',
        '/\bdocker|kubernetes|devops\b/u'     => 'DevOps',
        '/\bsecurity|penetration|vulnerab\w+/u' => 'güvenlik',
        '/\bmachine learning|neural|\bai\b|llm\b/u' => 'yapay zekâ',
        '/\blegal|lawyer|contract\b/u'        => 'hukuk',
        '/\bmedical|doctor|health|patient\b/u' => 'sağlık',
        '/\bfinanc|accounting|invest|budget\b/u' => 'finans',
        '/\bteacher|student|school|exam\b/u'  => 'eğitim',
        '/\bui\b|\bux\b|design system\b/u'    => 'arayüz tasarımı',
        '/\bgame dev|unity|unreal\b/u'        => 'oyun geliştirme',
    ];

    foreach ($alanlar as $kalip => $ad) {
        if (preg_match($kalip, $m)) {
            return $ad;
        }
    }

    return '';
}

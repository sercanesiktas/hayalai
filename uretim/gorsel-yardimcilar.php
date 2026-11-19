<?php

/*
 * Ortak yardımcılar: araç seçimi, Türkçe tanım cümleleri, büyük harf.
 *
 * Açıklamalar çeviri değil. Kaynak açıklamalar İngilizce ve "A prompt for
 * generating..." kalıbı Türkçeye çevrilince kötü duruyor, o yüzden tanımı
 * promptun kendi metninden çıkarıyoruz: ne üretiyor, hangi üslupta.
 */

/** Cümlenin ilk harfini büyütür. mb_strtoupper "i"yi "I" yapıyor, Türkçede "İ" olmalı. */
function ilkHarfBuyuk(string $s): string
{
    $ilk = mb_substr($s, 0, 1);
    $buyuk = $ilk === 'i' ? 'İ' : mb_strtoupper($ilk);

    return $buyuk . mb_substr($s, 1);
}

/** Boşlukları tek aralığa indirir, n karakterden uzunsa keser. */
function kirp(string $s, int $n): string
{
    $s = trim(preg_replace('/\s+/u', ' ', $s));

    return mb_strlen($s) <= $n ? $s : mb_substr($s, 0, $n - 1) . '…';
}

/** Başlık ve içerikten hedef aracı bulur. Bir şey tutmazsa ChatGPT. */
function aracSec(string $metin): string
{
    $m = mb_strtolower($metin);

    // sıra önemli, ilk tutan kazanıyor
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

    // "fark etmez" diye bir seçenek yok: her promptun gideceği bir araç olsun
    return 'chatgpt-gorsel';
}

/** Görsel promptun metninden konu ve üslup okuyup kısa bir Türkçe tanım kurar. */
function turkceTanim(string $metin): string
{
    $m = mb_strtolower($metin);

    // ne üretiyor: en belirgin olandan genele doğru
    $konular = [
        '/youtube thumbnail|thumbnail/u'                      => 'YouTube küçük resmi',
        '/\blogo\b|brand mark|wordmark/u'                     => 'logo',
        '/infographic|diagram|chart design/u'                 => 'bilgi grafiği',
        '/storyboard|comic (?:panel|page|strip)|manga/u'      => 'çizgi roman karesi',
        '/\bavatar\b|profile (?:picture|photo|image)|pfp/u'   => 'profil görseli',
        '/poster|flyer|billboard/u'                           => 'afiş',
        '/mockup|mock-up/u'                                   => 'ürün maketi (mockup)',
        '/\bui\b|\bux\b|app screen|landing page|web design|interface/u' => 'arayüz tasarımı',
        '/game (?:asset|character|icon)|sprite|pixel art/u'   => 'oyun görseli',
        '/product (?:photo|photography|shot|image)|packshot/u' => 'ürün fotoğrafı',
        '/food photography|dish|cuisine|dessert|beverage/u'   => 'yemek görseli',
        '/fashion|runway|lookbook|streetwear/u'               => 'moda çekimi',
        '/interior|architect|building|room design/u'          => 'mimari görsel',
        '/landscape|scenery|nature shot|mountain|forest/u'    => 'manzara',
        '/isometric|diorama|miniature|3d render|\b3d\b/u'     => '3B sahne',
        '/portrait|headshot|selfie/u'                         => 'portre',
        '/illustration|cartoon|anime|painting|artwork/u'      => 'illüstrasyon',
    ];

    $konu = 'görsel';
    foreach ($konular as $kalip => $ad) {
        if (preg_match($kalip, $m)) {
            $konu = $ad;
            break;
        }
    }

    // üslup: en fazla ikisi yazılıyor
    $usluplar = [
        '/photorealistic|hyper[- ]?realistic|ultra[- ]?realistic|photoreal/u' => 'fotogerçekçi',
        '/cinematic|film still|movie/u'                       => 'sinematik',
        '/minimal|clean|simple/u'                             => 'minimal',
        '/vintage|retro|90s|80s|nostalgi/u'                   => 'retro',
        '/watercolor|oil painting|sketch|hand[- ]drawn/u'     => 'elle çizilmiş',
        '/neon|cyberpunk|futuristic|sci[- ]?fi/u'             => 'fütüristik',
        '/luxury|premium|high[- ]end|elegant/u'               => 'lüks',
        '/studio (?:light|lighting|shot)/u'                   => 'stüdyo ışıklı',
    ];

    $bulunan = [];
    foreach ($usluplar as $kalip => $ad) {
        if (preg_match($kalip, $m)) {
            $bulunan[] = $ad;
        }
        if (count($bulunan) === 2) {
            break;
        }
    }

    $uslup = $bulunan ? implode(', ', $bulunan) . ' ' : '';

    return trim($uslup . $konu);
}

/** Metin promptunun ne iş yaptığını Türkçe bir fiille söyler. */
function metinGorevi(string $metin): string
{
    $m = mb_strtolower($metin);

    // en belirgin işten en genele. Bir prompt hem "review" hem "write"
    // içerebilir; asıl işi söyleyen öne konuyor.
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
        // ilk turda promptların %33'ü genel kalıba düşüyordu, aşağıdakiler
        // o yığından çıkan kalıplar
        '/\bchecklist|step[- ]by[- ]step|instructions\b/u'            => 'adım adım yönerge çıkarır',
        '/\bcompare|versus|pros and cons|trade[- ]?off\b/u'           => 'karşılaştırma yapar',
        '/\brewrite|rephrase|paraphrase|improve the (text|writing)\b/u' => 'metni yeniden yazar',
        '/\bquestions? (to|for)|ask me|quiz\b/u'                      => 'soru sorarak ilerler',
        '/\btranscri(be|pt)|caption|subtitle\b/u'                     => 'konuşmayı yazıya döker',
        '/\bprompt (engineer|generator|optimi)/u'                     => 'başka promptlar üretir',
        '/\bjson|yaml|schema|api (spec|design)\b/u'                   => 'yapılandırılmış çıktı üretir',
        '/\bdocument(ation)?|readme|changelog\b/u'                    => 'belge hazırlar',
        '/\barchitect|system design|scalab\w+/u'                      => 'mimari tasarım önerir',
        '/\bpersona|character|act as a (person|friend|coach)\b/u'     => 'belirli bir karakter olarak konuşur',
        '/\bnegotiat|persuade|convince\b/u'                           => 'ikna metni kurar',
        '/\bsimulat|pretend|imagine you are\b/u'                      => 'durum canlandırması yapar',
        '/\bresearch|find sources|cite\b/u'                           => 'araştırma yapar',
        '/\bdecision|recommend|advice|consult\b/u'                    => 'öneri ve tavsiye verir',
        '/\bcalculat|compute|formula|math\b/u'                        => 'hesaplama yapar',
    ];

    foreach ($gorevler as $kalip => $ad) {
        if (preg_match($kalip, $m)) {
            return $ad;
        }
    }

    return 'verilen konuda uzman gibi cevap verir';
}

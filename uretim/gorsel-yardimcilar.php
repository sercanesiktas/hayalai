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

/**
 * Görsel promptun konusunu ve üslubunu okuyup kısa bir Türkçe tanım kurar.
 *
 * Konu sırayla başlıkta, kaynak özetinde, en son promptun ilk 600
 * karakterinde aranıyor. Başlık en güvenilir alan: özette "fashion" geçen
 * bir "Mirror Selfie" promptu moda çekimi sayılmasın. Gövdenin tamamına
 * bakmak da yanlış etiket üretiyor, "portrait" kelimesi bir sahne
 * anlatımının ortasında da geçebiliyor.
 */
function turkceTanim(string $baslik, string $ozet, string $govde): string
{
    // sıra önemli: en belirgin olandan genele doğru, ilk tutan kazanıyor
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
        '/\bselfie\b/u'                                       => 'selfie fotoğrafı',
        '/\bcollage\b|photo grid|contact sheet/u'             => 'kolaj',
        '/portrait|headshot/u'                                => 'portre',
        '/\bcouple\b|wedding|engagement/u'                    => 'çift fotoğrafı',
        '/\bcars?\b|ferrari|lamborghini|porsche|motorcycle|supercar/u' => 'araç görseli',
        '/\b(?:cat|dog|puppy|kitten|elephant|horse|lion|tiger|bird|fox|wolf|bear|rabbit|animal|wildlife)s?\b/u' => 'hayvan görseli',
        '/dragon|monster|creature|alien|\brobot\b/u'          => 'fantastik yaratık',
        '/character|chibi|figurine|action figure|\btoy\b/u'   => 'karakter görseli',
        '/street|urban|cityscape|skyline|\bcity\b/u'          => 'şehir ve sokak sahnesi',
        '/beach|ocean|seaside|\bsea\b|swimsuit/u'             => 'sahil sahnesi',
        '/surreal|dreamlike|fantasy|magical/u'                => 'fantastik sahne',
        '/illustration|cartoon|anime|painting|artwork/u'      => 'illüstrasyon',
        '/\b(?:woman|girl|female|lady)\b/u'                   => 'kadın figürlü görsel',
        '/\b(?:man|boy|male|guy)\b/u'                         => 'erkek figürlü görsel',
        '/photograph|\bphoto\b|snapshot|candid|editorial|lifestyle/u' => 'fotoğraf',
        '/\bscene\b/u'                                        => 'sahne',
    ];

    $konu = 'görsel';
    foreach ([$baslik, $ozet, mb_substr($govde, 0, 600)] as $alan) {
        $alan = mb_strtolower($alan);
        foreach ($konular as $kalip => $ad) {
            if (preg_match($kalip, $alan)) {
                $konu = $ad;
                break 2;
            }
        }
    }

    // üslup bütün metinden okunuyor, en fazla ikisi yazılıyor
    $m = mb_strtolower($baslik . ' ' . $ozet . ' ' . mb_substr($govde, 0, 1500));
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

/**
 * Metin promptunun ne iş yaptığını Türkçe bir fiille söyler.
 *
 * Önce başlığa bakılıyor. Bulunamazsa promptun başındaki rol tanımına
 * ("I want you to act as ..." sonrası). Gövdenin tamamında aramak yanlış
 * sonuç veriyordu: "performance" ya da "resume" kelimesi tesadüfen geçtiği
 * için "Sudoku Game" özgeçmiş hazırlayan bir prompt olarak etiketleniyordu.
 */
function metinGorevi(string $baslik, string $govde): string
{
    // en belirgin işten en genele, ilk tutan kazanıyor
    $gorevler = [
        '/\btranslat(e|or|ion)\b/u'                                  => 'çeviri yapar',
        '/\bprompt (engineer|generator|optimi\w*|enhancer)/u'         => 'başka promptlar üretir',
        '/\bscrap(er|ing)|crawler/u'                                  => 'veri kazıma betiği yazar',
        '/\bproofread|grammar|spelling|correct the text\b/u'          => 'metni dilbilgisi yönünden düzeltir',
        '/\bsummar\w*/u'                                              => 'özet çıkarır',
        '/\bdebug|fix the (bug|code|error)|error message\b/u'         => 'hata ayıklar',
        '/\brefactor\w*|optimi[sz]\w*/u'                              => 'iyileştirme önerir',
        '/\b(code )?review|critique|audit\b/u'                        => 'inceleyip değerlendirir',
        '/\bunit test|write tests|test cases\b/u'                     => 'test yazar',
        '/\binterview(er)?\b/u'                                       => 'mülakat sorusu sorar',
        '/\bterminal|console|compiler|interpreter|emulat\w+\b/u'      => 'komut çıktısı taklit eder',
        '/\blinux|ubuntu|nixos|bash|powershell|command line|\bcli\b/u' => 'komut satırı ve sistem konularında yardım eder',
        '/\bsql|database quer(y|ies)\b/u'                             => 'sorgu yazar',
        '/\bregex|regular expression\b/u'                             => 'düzenli ifade üretir',
        '/\bsudoku|chess|dice|puzzle|trivia|\bgame\b/u'               => 'oyun/rol canlandırması yürütür',
        '/\bhoroscope|astrolog\w+|tarot|zodiac/u'                     => 'burç ve fal yorumu yazar',
        '/\bplanner|study plan|schedule|timetable/u'                  => 'plan hazırlar',
        '/\bseo|keyword research|meta description\b/u'                => 'arama motoru için içerik çıkarır',
        '/\bcold email|outreach|sales email\b/u'                      => 'satış e-postası yazar',
        '/\bcopywrit\w*|ad copy|advertis\w*|campaign|marketing|google ads/u' => 'reklam metni yazar',
        '/\bproduct description|listing\b/u'                          => 'ürün açıklaması yazar',
        '/\bsocial media|instagram|tiktok|twitter|linkedin post\b/u'  => 'sosyal medya içeriği üretir',
        '/\bresume|\bcv\b|cover letter\b/u'                           => 'özgeçmiş ve başvuru metni hazırlar',
        '/\bbusiness plan|strategy|roadmap|okr\b/u'                   => 'plan ve strateji çıkarır',
        '/\bbrainstorm|idea generator|come up with ideas\b/u'         => 'fikir üretir',
        '/\bname (generator|suggestion)|brand name|naming\b/u'        => 'isim önerir',
        '/\b(title|slogan|tagline|headline)s?\b/u'                    => 'başlık ve slogan önerir',
        '/\bpassword\b/u'                                           => 'parola üretir ve kontrol eder',
        '/\bstory|screenplay|novel|poem|lyrics\b/u'                   => 'yaratıcı metin yazar',
        '/\brecipe|cook\b/u'                                          => 'tarif verir',
        '/\bworkout|fitness|diet|nutrition\b/u'                       => 'program çıkarır',
        '/\btravel|itinerary|trip plan\b/u'                           => 'gezi planı hazırlar',
        '/\bextract|parse|convert|format (the )?(lines|data|text)\b/u' => 'veriyi ayıklayıp biçimlendirir',
        '/\bclassify|categori[sz]e|label\b/u'                         => 'sınıflandırma yapar',
        '/\broleplay|role-play|play as\b/u'                           => 'oyun/rol canlandırması yürütür',
        '/\banalyz|analys|report on|insight\b/u'                      => 'analiz yapar',
        '/\bteach\w*|explain\w*|tutor\w*|lesson|curriculum|coach\w*|mentor\w*|professor|sensei|trainer/u' => 'konuyu anlatır ve öğretir',
        '/\b(app|application|clone|website|plugin|extension|dashboard|player)\b/u' => 'uygulama kodu yazar',
        '/\bwrit(e|er|ing)\b|draft|compose|essay|article|newsletter|blog|script\b|generate (a |an )?(text|article|post)/u' => 'metin yazar',
        '/\bphoto\w*|portrait|\brender\w*|\bcgi\b|anime|illustration|artwork|cinematic|aesthetic|\b3d\b/u' => 'görsel üretimi için yönerge verir',
        '/\bvideo\w*|\bfilm\b|documentary/u'                       => 'video içeriği hazırlar',
        '/\bprd\b|\breport|briefing|\bbrief\b|specification/u'     => 'rapor ve belge hazırlar',
        '/\bplan\b/u'                                               => 'plan hazırlar',
        '/\bchecklist|step[- ]by[- ]step|instructions\b/u'            => 'adım adım yönerge çıkarır',
        '/\bcompare|versus|pros and cons|trade[- ]?off\b/u'           => 'karşılaştırma yapar',
        '/\brewrite|rephrase|paraphrase|improve the (text|writing)\b/u' => 'metni yeniden yazar',
        '/\bquestions? (to|for)|ask me|quiz\b/u'                      => 'soru sorarak ilerler',
        '/\btranscri(be|pt)|caption|subtitle\b/u'                     => 'konuşmayı yazıya döker',
        '/\bjson|yaml|schema|api (spec|design)\b/u'                   => 'yapılandırılmış çıktı üretir',
        '/\bdocumentation\b|\bdocuments?\b|readme|changelog/u'         => 'belge hazırlar',
        '/\barchitect|system design|scalab\w+/u'                      => 'mimari tasarım önerir',
        '/\bpersona|character|act as a (person|friend|coach)\b/u'     => 'belirli bir karakter olarak konuşur',
        '/\bnegotiat|persuade|convince\b/u'                           => 'ikna metni kurar',
        '/\bresearch|find sources|cite\b/u'                           => 'araştırma yapar',
        '/\bdecision|recommend\w*|advis\w*|consult\w*|expert|specialist|strategist|manager/u' => 'öneri ve tavsiye verir',
        '/\bcalculat\w*|compute|formula|math\b/u'                    => 'hesaplama yapar',
        '/\bsimulat|pretend|imagine you are\b/u'                      => 'durum canlandırması yapar',
    ];

    // ikinci aşama: gövdenin tamamı değil, yalnızca "act as ..." gibi bir rol tanımı varsa onun devamı
    $alanlar = [mb_strtolower($baslik)];
    if (preg_match('/(?:act as|you are|imagine you are|pretend to be|take the role of|role of)\s+(?:an?\s+|the\s+)?(.{0,90})/iu', mb_substr($govde, 0, 400), $e)) {
        $alanlar[] = mb_strtolower($e[1]);
    }

    foreach ($alanlar as $alan) {
        foreach ($gorevler as $kalip => $ad) {
            if (preg_match($kalip, $alan)) {
                return $ad;
            }
        }
    }

    return 'verilen konuda uzman gibi cevap verir';
}

import { readFile, writeFile, mkdir } from 'node:fs/promises';
import { existsSync } from 'node:fs';
import { homedir } from 'node:os';
import { dirname, join } from 'node:path';
import { fileURLToPath } from 'node:url';

const CSV_ADRESI = 'https://raw.githubusercontent.com/sercanesiktas/hayalai/main/prompts.csv';

// RFC 4180: tırnak içinde virgül ve satır sonu olabilir, "" bir tırnak demek.
export function csvAyristir(metin) {
  const satirlar = [];
  let alan = '';
  let satir = [];
  let tirnakta = false;

  for (let i = 0; i < metin.length; i++) {
    const c = metin[i];
    if (tirnakta) {
      if (c === '"') {
        if (metin[i + 1] === '"') { alan += '"'; i++; } else { tirnakta = false; }
      } else {
        alan += c;
      }
    } else if (c === '"') {
      tirnakta = true;
    } else if (c === ',') {
      satir.push(alan); alan = '';
    } else if (c === '\n') {
      satir.push(alan); alan = '';
      satirlar.push(satir); satir = [];
    } else if (c !== '\r') {
      alan += c;
    }
  }
  if (alan !== '' || satir.length) { satir.push(alan); satirlar.push(satir); }

  const [baslik, ...govde] = satirlar;
  return govde
    .filter((s) => s.length === baslik.length)
    .map((s) => Object.fromEntries(baslik.map((b, i) => [b, s[i]])));
}

// "isim" yazınca "İsim" de bulunsun diye Türkçe harfler sadeleştirilir.
export function duzle(s) {
  return s
    .replace(/İ/g, 'i').replace(/I/g, 'ı')
    .toLowerCase()
    .replace(/ı/g, 'i').replace(/ş/g, 's').replace(/ğ/g, 'g')
    .replace(/ü/g, 'u').replace(/ö/g, 'o').replace(/ç/g, 'c');
}

export function indeksle(satirlar) {
  return satirlar.map((s) => ({
    ...s,
    _baslik: duzle(s.title),
    _ara: duzle(`${s.title} ${s.description_tr}`),
  }));
}

export function ara(indeks, { sorgu = '', kategori, arac, adet = 10 } = {}) {
  const kelimeler = duzle(sorgu.trim()).split(/\s+/).filter(Boolean);
  const sonuc = [];

  for (const s of indeks) {
    if (kategori && s.category !== kategori) continue;
    if (arac && s.tool !== arac) continue;
    if (!kelimeler.every((k) => s._ara.includes(k))) continue;

    // başlıkta geçen kelime açıklamada geçenden değerli
    const puan = kelimeler.filter((k) => s._baslik.includes(k)).length;
    sonuc.push({ s, puan });
  }

  sonuc.sort((a, b) => b.puan - a.puan);
  return { toplam: sonuc.length, satirlar: sonuc.slice(0, adet).map((x) => x.s) };
}

export function getir(indeks, baslik) {
  const aranan = duzle(baslik.trim());
  const tam = indeks.find((s) => s._baslik === aranan);
  if (tam) return tam;
  // tam eşleşme yoksa başlığı içeren en kısa başlık
  const adaylar = indeks.filter((s) => s._baslik.includes(aranan));
  adaylar.sort((a, b) => a.title.length - b.title.length);
  return adaylar[0] ?? null;
}

export function rastgele(indeks, { kategori, arac } = {}) {
  const havuz = indeks.filter((s) => (!kategori || s.category === kategori) && (!arac || s.tool === arac));
  return havuz.length ? havuz[Math.floor(Math.random() * havuz.length)] : null;
}

export function sayilar(indeks) {
  const kategori = {};
  const arac = {};
  for (const s of indeks) {
    kategori[s.category] = (kategori[s.category] ?? 0) + 1;
    arac[s.tool] = (arac[s.tool] ?? 0) + 1;
  }
  return { toplam: indeks.length, kategori, arac };
}

// CSV'nin yeri: HAYALAI_CSV, depo klonunun içindeysek bir üst klasör, yoksa
// ilk çalışmada indirilip önbelleğe alınır.
export async function csvYolu() {
  if (process.env.HAYALAI_CSV) return process.env.HAYALAI_CSV;

  const yerel = join(dirname(fileURLToPath(import.meta.url)), '..', 'prompts.csv');
  if (existsSync(yerel)) return yerel;

  const onbellek = join(process.env.XDG_CACHE_HOME ?? join(homedir(), '.cache'), 'hayalai-mcp', 'prompts.csv');
  if (!existsSync(onbellek)) {
    const yanit = await fetch(CSV_ADRESI);
    if (!yanit.ok) throw new Error(`prompts.csv indirilemedi: HTTP ${yanit.status}`);
    await mkdir(dirname(onbellek), { recursive: true });
    await writeFile(onbellek, Buffer.from(await yanit.arrayBuffer()));
  }
  return onbellek;
}

export async function yukle() {
  const metin = await readFile(await csvYolu(), 'utf8');
  return indeksle(csvAyristir(metin));
}

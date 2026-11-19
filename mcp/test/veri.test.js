import test from 'node:test';
import assert from 'node:assert/strict';
import { csvAyristir, duzle, indeksle, ara, getir, sayilar, yukle } from '../veri.js';

test('csv: tırnak, virgül, satır sonu ve çift tırnak', () => {
  const metin = 'a,b,c\n"x, y","satır\r\nikinci ""alıntı""",z\n1,2,3\n';
  const s = csvAyristir(metin);
  assert.equal(s.length, 2);
  assert.equal(s[0].a, 'x, y');
  assert.equal(s[0].b, 'satır\r\nikinci "alıntı"');
  assert.equal(s[1].c, '3');
});

test('düzle: Türkçe büyük/küçük harf', () => {
  assert.equal(duzle('İyileştirme'), 'iyilestirme');
  assert.equal(duzle('IŞIK'), 'isik');
  assert.equal(duzle('Çğüöş'), 'cguos');
});

const ornek = indeksle([
  { title: 'Logo Tasarımcısı', category: 'tasarim', tool: 'chatgpt', description_tr: 'Logo fikri üretir.', prompt: 'p1' },
  { title: 'Portre', category: 'gorsel', tool: 'midjourney', description_tr: 'İyileştirme önerir.', prompt: 'p2' },
  { title: 'Retro Logo', category: 'gorsel', tool: 'midjourney', description_tr: 'Görsel üretir.', prompt: 'p3' },
]);

test('ara: tüm kelimeler geçmeli, aksansız yazım bulunur', () => {
  assert.equal(ara(ornek, { sorgu: 'iyilestirme' }).toplam, 1);
  assert.equal(ara(ornek, { sorgu: 'logo' }).toplam, 2);
  assert.equal(ara(ornek, { sorgu: 'logo tasarimcisi' }).toplam, 1);
  assert.equal(ara(ornek, { sorgu: 'olmayan' }).toplam, 0);
});

test('ara: filtre ve sıralama (başlıkta geçen önce)', () => {
  assert.equal(ara(ornek, { sorgu: 'logo', kategori: 'gorsel' }).toplam, 1);
  assert.equal(ara(ornek, { arac: 'midjourney' }).toplam, 2);
  const s = ara(ornek, { sorgu: 'logo', adet: 1 });
  assert.equal(s.satirlar.length, 1);
  assert.equal(s.toplam, 2);
});

test('getir: tam başlık, kısmi başlık, bulunamayan', () => {
  assert.equal(getir(ornek, 'portre').prompt, 'p2');
  assert.equal(getir(ornek, 'tasarimci').title, 'Logo Tasarımcısı');
  assert.equal(getir(ornek, 'yok'), null);
});

test('gerçek veri seti: 17.086 prompt, 9 kategori, bozuk satır yok', async () => {
  const indeks = await yukle();
  const n = sayilar(indeks);
  assert.equal(n.toplam, 17086);
  assert.equal(Object.keys(n.kategori).length, 9);
  assert.ok(indeks.every((s) => s.title && s.prompt && s.description_tr));
  // CR içeren promptlar bozulmadan okunuyor
  assert.ok(indeks.some((s) => s.prompt.includes('\r')));
  assert.ok(ara(indeks, { sorgu: 'iyilestirme' }).toplam > 0);
});

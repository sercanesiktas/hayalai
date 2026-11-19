import test from 'node:test';
import assert from 'node:assert/strict';
import { fileURLToPath } from 'node:url';
import { dirname, join } from 'node:path';
import { Client } from '@modelcontextprotocol/sdk/client/index.js';
import { StdioClientTransport } from '@modelcontextprotocol/sdk/client/stdio.js';
import { yukle } from '../veri.js';

const sunucu = join(dirname(fileURLToPath(import.meta.url)), '..', 'sunucu.js');

async function baglan() {
  const taşıma = new StdioClientTransport({ command: process.execPath, args: [sunucu] });
  const istemci = new Client({ name: 'test', version: '1.0.0' });
  await istemci.connect(taşıma);
  return istemci;
}

const yazi = (r) => r.content.map((c) => c.text).join('\n');

// assertion patlasa bile alt süreç kapansın
async function istemciyle(is) {
  const istemci = await baglan();
  try {
    await is(istemci);
  } finally {
    await istemci.close();
  }
}

test('sunucu: dört araç listelenir', () => istemciyle(async (istemci) => {
  const { tools } = await istemci.listTools();
  assert.deepEqual(tools.map((t) => t.name).sort(), ['kategoriler', 'prompt_ara', 'prompt_getir', 'rastgele_prompt']);
}));

test('sunucu: ara ve getir', () => istemciyle(async (istemci) => {
  const bulunan = yazi(await istemci.callTool({ name: 'prompt_ara', arguments: { sorgu: 'linux terminal', adet: 3 } }));
  assert.match(bulunan, /Linux Terminal/);

  const prompt = yazi(await istemci.callTool({ name: 'prompt_getir', arguments: { baslik: 'Linux Terminal' } }));
  assert.match(prompt, /act as a linux terminal/i);

  const yok = yazi(await istemci.callTool({ name: 'prompt_getir', arguments: { baslik: 'bu başlık yok zzzz' } }));
  assert.match(yok, /bulunamadı/);
}));

test('sunucu: uzun prompt kesilir ve uyarı verir', () => istemciyle(async (istemci) => {
  const uzun = (await yukle()).find((s) => s.prompt.length > 3000);
  const kesik = yazi(await istemci.callTool({ name: 'prompt_getir', arguments: { baslik: uzun.title, maks_karakter: 500 } }));
  assert.match(kesik, /ilk 500 karakteri/);
}));

test('sunucu: rastgele, kategoriler, geçersiz argüman', () => istemciyle(async (istemci) => {
  const r = yazi(await istemci.callTool({ name: 'rastgele_prompt', arguments: { kategori: 'kod' } }));
  assert.match(r, /kod ·/);

  const n = yazi(await istemci.callTool({ name: 'kategoriler', arguments: {} }));
  assert.match(n, /Toplam 17086 prompt/);

  const hatali = await istemci.callTool({ name: 'prompt_ara', arguments: { sorgu: 'x', kategori: 'yanlis' } });
  assert.equal(hatali.isError, true);
}));

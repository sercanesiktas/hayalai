#!/usr/bin/env node
import { McpServer } from '@modelcontextprotocol/sdk/server/mcp.js';
import { StdioServerTransport } from '@modelcontextprotocol/sdk/server/stdio.js';
import { z } from 'zod';
import { yukle, ara, getir, rastgele, sayilar } from './veri.js';

const KATEGORILER = ['gorsel', 'metin', 'kod', 'web', 'video', 'pazarlama', 'ses', 'tasarim', 'mobil'];
const kategoriAlani = z.enum(KATEGORILER).optional().describe('gorsel, metin, kod, web, video, pazarlama, ses, tasarim, mobil');
const aracAlani = z.string().optional().describe('Örn. midjourney, chatgpt, chatgpt-gorsel, gemini-gorsel, firefly, stable-diffusion');

const indeks = await yukle();
const sunucu = new McpServer({ name: 'hayalai', version: '0.1.0' });

const metin = (icerik) => ({ content: [{ type: 'text', text: icerik }] });

function ozet(s, sira) {
  const onek = sira ? `${sira}. ` : '';
  return `${onek}${s.title}  [${s.category} · ${s.tool}]\n   ${s.description_tr}`;
}

function tamPrompt(s, sinir) {
  let p = s.prompt.trim();
  let not = '';
  if (p.length > sinir) {
    not = `\n\n(Prompt ${p.length} karakter, ilk ${sinir} karakteri gösterildi. Tamamı için maks_karakter değerini artır.)`;
    p = p.slice(0, sinir);
  }
  return `# ${s.title}\n${s.category} · ${s.tool}\n\n${s.description_tr}\n\n--- PROMPT ---\n${p}${not}`;
}

sunucu.tool(
  'prompt_ara',
  'Türkçe açıklamalı 17 bin promptluk kütüphanede başlık ve açıklamaya göre arar. Sonuçta promptun kendisi değil özeti döner; metni almak için prompt_getir kullan.',
  {
    sorgu: z.string().describe('Aranacak kelimeler, hepsi geçmeli. Örn. "portre", "SEO", "logo"'),
    kategori: kategoriAlani,
    arac: aracAlani,
    adet: z.number().int().min(1).max(30).default(10).describe('En fazla kaç sonuç dönsün'),
  },
  async ({ sorgu, kategori, arac, adet }) => {
    const { toplam, satirlar } = ara(indeks, { sorgu, kategori, arac, adet });
    if (!toplam) return metin('Sonuç yok. Daha az ya da daha genel kelime dene.');
    const baslik = `${toplam} sonuç${toplam > satirlar.length ? `, ilk ${satirlar.length} gösteriliyor` : ''}:\n\n`;
    return metin(baslik + satirlar.map((s, i) => ozet(s, i + 1)).join('\n\n'));
  },
);

sunucu.tool(
  'prompt_getir',
  'Başlığı bilinen promptun tam metnini getirir. Başlık prompt_ara sonucundan alınır; tam eşleşme yoksa başlığı içeren en kısa başlık seçilir.',
  {
    baslik: z.string().describe('Promptun başlığı'),
    maks_karakter: z.number().int().min(500).max(60000).default(20000).describe('Çok uzun promptlar için kesme sınırı'),
  },
  async ({ baslik, maks_karakter }) => {
    const s = getir(indeks, baslik);
    return s ? metin(tamPrompt(s, maks_karakter)) : metin(`"${baslik}" başlıklı prompt bulunamadı. Önce prompt_ara ile başlığı bul.`);
  },
);

sunucu.tool(
  'rastgele_prompt',
  'Kategori ve araca göre rastgele bir prompt seçip tam metniyle getirir. Fikir bulmak için.',
  { kategori: kategoriAlani, arac: aracAlani },
  async ({ kategori, arac }) => {
    const s = rastgele(indeks, { kategori, arac });
    return s ? metin(tamPrompt(s, 20000)) : metin('Bu filtreyle prompt yok.');
  },
);

sunucu.tool(
  'kategoriler',
  'Kütüphanedeki kategori ve araç dağılımını sayılarıyla verir.',
  {},
  async () => {
    const n = sayilar(indeks);
    const satir = (o) => Object.entries(o).sort((a, b) => b[1] - a[1]).map(([k, v]) => `  ${k}: ${v}`).join('\n');
    return metin(`Toplam ${n.toplam} prompt\n\nKategori:\n${satir(n.kategori)}\n\nAraç:\n${satir(n.arac)}`);
  },
);

await sunucu.connect(new StdioServerTransport());

# hayalai-mcp

HayalAI prompt kütüphanesini [MCP](https://modelcontextprotocol.io) sunucusu olarak açar. Claude, Cursor gibi
bir istemci 17 bin Türkçe açıklamalı promptta arama yapabilir, istediği promptun tam metnini alıp kullanabilir.

## Araçlar

| Araç | Ne yapar |
|---|---|
| `prompt_ara` | Başlık ve Türkçe açıklamada arar. Kategori ve araç filtresi var. Sonuçta özet döner, metin değil. |
| `prompt_getir` | Başlığı bilinen promptun tam metnini verir. Çok uzun promptlar `maks_karakter` ile kesilebilir. |
| `rastgele_prompt` | Kategori ve araca göre rastgele bir prompt seçip tam metniyle getirir. |
| `kategoriler` | Kategori ve araç dağılımı. |

Arama Türkçe harfe duyarlı değil: `iyilestirme` yazınca `İyileştirme` de bulunur.

## Kurulum

Node 18 ya da üstü gerekir.

```bash
git clone https://github.com/sercanesiktas/hayalai.git
cd hayalai/mcp
npm install
```

Sunucu veriyi `../prompts.csv` dosyasından okur. Bu klasör depo dışına taşınırsa
ilk çalışmada GitHub'dan indirip `~/.cache/hayalai-mcp/` altında saklar. Başka bir
dosya kullanmak için `HAYALAI_CSV` ortam değişkenini ver.

### Claude Code

```bash
claude mcp add hayalai -- node /tam/yol/hayalai/mcp/sunucu.js
```

### Claude Desktop

`claude_desktop_config.json` içine:

```json
{
  "mcpServers": {
    "hayalai": {
      "command": "node",
      "args": ["/tam/yol/hayalai/mcp/sunucu.js"]
    }
  }
}
```

### Cursor

`~/.cursor/mcp.json` dosyasında aynı `mcpServers` bloğu.

## Örnek

> "Midjourney için retro bir logo promptu bul ve bana tam metnini ver."

İstemci `prompt_ara` (`sorgu: "retro logo"`, `arac: "midjourney"`) ile adayları listeler,
seçtiğin başlık için `prompt_getir` çağırır.

## Test

```bash
npm test
```

Testler CSV ayrıştırıcıyı, aramayı ve sunucuyu gerçek bir MCP istemcisiyle uçtan uca çalıştırır.

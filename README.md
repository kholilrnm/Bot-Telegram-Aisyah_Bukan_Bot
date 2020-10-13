[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/kholilboy/Aisyah-Bukan-Bot)

## STAR REPOSITORY Ini, Untuk Membantu Saya Dalam Meningkatkan Project Repo.
- Kirim Pull Request, Jika mau berkontribusi dalam project ini
- Kirim Issues, Jika ada permasalahan pada project ini
- Kirim Pesan Saya, Jika ada sesuatu yang ingin dipertanyakan

## Aisyah Bukan BOT
Proyek API Development

## Tools / Framework
| Bagian | Tools yang digunakan |
| --- | --- |
| Back-End | Botman -> PHP |
| Database | MySQL |
| Web Server | Ngrok or Hosting |

## Demo BOT
Via Telegram : <a href="https://t.me/Aisyah_Bukan_Bot">@Aisyah_Bukan_Bot</a> 

<br>
<p align="center">
        <img src="/images/aisyah1.jpg" width="238" height="414">
</p>

<br>
<p align="center">
        <img src="/images/aisyah2.jpg" width="238" height="414">
</p>

<br>
<p align="center">
        <img src="/images/aisyah3.jpg" width="238" height="414">
</p>
<br>

## Cara Menjalankan Via Hosting
1. Fork / Download This Repo 
2. Push to Web Host.
3. Setting Database
4. Webhook BOT : 

```bash
https://api.telegram.org/bot[TokenBOT]/setWebhook?url=[Webhost]/[FolderProject - Jika Pake Folder]/bot.php (tanpa tanda "[]" )
```
5. Done!. Testing for The BOT telegram

## Cara Menjalankan Via Local
1. Fork / Download This Repo 
2. Push to htdocs or folder anywhere.
3. Setting Database
4. CMD/GitBash command to folder project: php -S localhost:[PORT]  (biasanya port 80)
5. Open Aplikasi Ngrok, command : ngrok http [PORT]  (mengikuti port localhost) https://ngrok.com/download
6. Webhook BOT With CMD/GitBash : 

```bash
curl -d url=[https ngrok server]/bot.php -X POST https://api.telegram.org/bot[TokenBOT]/setWebhook (tanpa tanda "[]" )
```
7. Done!. Testing for The BOT telegram

## Menghapus Webhook
Berikut menghapus webhook melalui browser :

```html
https://api.telegram.org/bot[TOKEN]/setWebhook
```

## NOTE: 
- Anda perlu memasukan token BOT TELEGRAM anda pada file 'token.txt' di folder private (private/token.txt)
- Anda perlu setting database dahulu (aisyah_bukan_bot.sql)
- Disarankan testing via local -> Untuk Error bisa dilihat pada cmd nya (cmd yang saat command php -S localhost)
- Untuk dokumentasi botman bisa dilihat di https://botman.io/2.0/welcome 
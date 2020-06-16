[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/kholilboy/Aisyah-Bukan-Bot)

## STAR REPOSITORY Ini, Untuk Membantu Saya Dalam Meningkatkan Project Repo.
- Kirim Pull Request, Jika mau berkontribusi dalam project ini
- Kirim Issues, Jika ada permasalahan pada project ini
- Kirim Pesan, Jika ada sesuatu yang ingin dipertanyakan

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
1. Clone / Download This Repo 
2. Push to Web Host.
3. Webhook BOT : https://api.telegram.org/bot[TokenBOT]/setWebhook?url=[Webhost]/[FolderProject]/bot.php
4. Done!. Testing for The BOT telegram

## Cara Menjalankan Via Local
1. Clone / Download This Repo 
2. Push to htdocs or folder localhost.
3. CMD command to folder project: php -S localhost:[PORT]
4. Open Ngrok, command : ngrok http [PORT]
5. Webhook BOT : curl -d url=[https ngrok server]/bot.php -X POST https://api.telegram.org/bot[TokenBOT]/setWebhook
6. Done!. Testing for The BOT telegram

## NOTE: 
- Anda perlu memasukan token BOT TELEGRAM anda pada file 'token.txt' di folder private (private/token.txt)
- Anda perlu setting database dahulu (aisyah_bukan_bot.sql)

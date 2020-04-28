<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Video;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

require_once 'vendor/autoload.php';
require_once 'database/configDB.php';

// $configs = [
//     "telegram" => [
//         "token" => file_get_contents("private/token.txt")
//     ]
// ];

DriverManager::loadDriver(TelegramDriver::class);

$botman = BotManFactory::create($configs); 

// Command no @ to bot
$botman->hears("/start", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    $bot->reply("Assalamualaikum $firstname 😊 (ID:$id),\nNama Saya Aisyah Salma. Selamat Datang Di Layanan Sekretaris Pribadi Anda.\n\nKetikkan Perintah /help Untuk Mengetahui Menu Perintah Yang Bisa Saya Kerjakan");
    include "command/requestChat.php";
});

$botman->hears("/help", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    
    include "command/requestChat.php";
    
    $bot->reply("/lihat_catatan_tugas_kuliah \n*Untuk Melihat Catatan M.K");
    $bot->reply("/tambah_catatan_tugas_kuliah \n*Untuk Membuat Catatan M.K");
    $bot->reply("/edit_catatan_tugas_kuliah \n*Untuk Mengedit Catatan M.K");
    $bot->reply("/hapus_catatan_tugas_kuliah \n*Untuk Menghapus Catatan M.K");
});

$botman->hears("/lihat_catatan_tugas_kuliah", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    include "command/viewDataUser.php";

    $message = viewCatatanUser($id_user);
    $bot->reply($message);

});

$botman->hears("/tambah_catatan_tugas_kuliah", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    $bot->reply("Format Tambah Catatan Tugas Kuliah :\n\n/tambah_catatan [Nama Mata Kuliah]__[Catatan Mata Kuliah]__[Deadline M.K]\n\n*Tanpa Tanda Kurung []");
});

$botman->hears("/tambah_catatan {nama_mk}__{catatan_mk}__{deadline_mk}", function (Botman $bot, $nama_mk, $catatan_mk, $deadline_mk) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    
    $nama_mk = $nama_mk;
    $catatan_mk = $catatan_mk;
    $deadline_mk = $deadline_mk;
    
    include "command/requestChat.php";
    include "command/insertDataCatatan.php";

    $message = insertDataCatatan($id_user, $nama_mk, $catatan_mk, $deadline_mk);
    $bot->reply($message);

});

$botman->hears("/edit_catatan_tugas_kuliah", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    $bot->reply("Format Edit Catatan Tugas Kuliah :\n\n/edit_catatan [Pilih ID Kode MK]__[Nama Mata Kuliah Baru]__[Catatan Mata Kuliah Baru]__[Deadline M.K Baru]\n\n*Tanpa Tanda Kurung []");
});

$botman->hears("/edit_catatan {kode_mk}__{nama_mk}__{catatan_mk}__{deadline_mk}", function (Botman $bot, $kode_mk, $nama_mk, $catatan_mk, $deadline_mk) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    
    $kode_mk = $kode_mk;
    $nama_mk = $nama_mk;
    $catatan_mk = $catatan_mk;
    $deadline_mk = $deadline_mk;
    
    include "command/updateDataCatatan.php";

    $message = updateDataCatatan($id_user, $kode_mk, $nama_mk, $catatan_mk, $deadline_mk);
    $bot->reply($message);

});

$botman->hears("/hapus_catatan_tugas_kuliah", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";

    $bot->reply("Format Hapus Catatan Tugas Kuliah :\n\n/hapus_catatan [Pilih ID Kode MK Yang Ingin Dihapus]\n\n*Tanpa Tanda Kurung []");
});

$botman->hears("/hapus_catatan {kode_mk}", function (Botman $bot, $kode_mk) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    
    $kode_mk = $kode_mk;
    
    include "command/delDataCatatan.php";

    $message = delDataCatatan($id_user, $kode_mk);
    $bot->reply($message);

});


// ------------------------------------------------------------pembatas---------------------------------------------------------- 
// Command with @ to bot
$botman->hears("/start@Aisyah_Bukan_Bot", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    $id = $user->getId();

    $bot->reply("Assalamualaikum $firstname 😊 (ID:$id),\nNama Saya Aisyah Salma. Selamat Datang Di Layanan Sekretaris Pribadi Anda.\n\nKetikkan Perintah /help Untuk Mengetahui Menu Perintah Yang Bisa Saya Kerjakan");
    include "command/requestChat.php";
});

$botman->hears("/help@Aisyah_Bukan_Bot", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";

    $bot->reply("/lihat_catatan_tugas_kuliah@Aisyah_Bukan_Bot \n*Untuk Melihat Catatan M.K");
    $bot->reply("/tambah_catatan_tugas_kuliah@Aisyah_Bukan_Bot \n*Untuk Membuat Catatan M.K");
    $bot->reply("/edit_catatan_tugas_kuliah@Aisyah_Bukan_Bot \n*Untuk Mengedit Catatan M.K");
    $bot->reply("/hapus_catatan_tugas_kuliah@Aisyah_Bukan_Bot \n*Untuk Menghapus Catatan M.K");
});

$botman->hears("/lihat_catatan_tugas_kuliah@Aisyah_Bukan_Bot", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    include "command/viewDataUser.php";

    $message = viewCatatanUser($id_user);
    $bot->reply($message);

});

$botman->hears("/tambah_catatan_tugas_kuliah@Aisyah_Bukan_Bot", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";

    $bot->reply("Format Tambah Catatan Tugas Kuliah :\n\n/tambah_catatan [Nama Mata Kuliah]__[Catatan Mata Kuliah]__[Deadline M.K]\n\n*Tanpa Tanda Kurung []");
});

$botman->hears("/tambah_catatan@Aisyah_Bukan_Bot {nama_mk}__{catatan_mk}__{deadline_mk}", function (Botman $bot, $nama_mk, $catatan_mk, $deadline_mk) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    
    $nama_mk = $nama_mk;
    $catatan_mk = $catatan_mk;
    $deadline_mk = $deadline_mk;
    
    include "command/insertDataCatatan.php";

    $message = insertDataCatatan($id_user, $nama_mk, $catatan_mk, $deadline_mk);
    $bot->reply($message);

});

$botman->hears("/edit_catatan_tugas_kuliah@Aisyah_Bukan_Bot", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";

    $bot->reply("Format Edit Catatan Tugas Kuliah :\n\n/edit_catatan [Pilih ID Kode MK]__[Nama Mata Kuliah Baru]__[Catatan Mata Kuliah Baru]__[Deadline M.K Baru]\n\n*Tanpa Tanda Kurung []");
});

$botman->hears("/edit_catatan@Aisyah_Bukan_Bot {kode_mk}__{nama_mk}__{catatan_mk}__{deadline_mk}", function (Botman $bot, $kode_mk, $nama_mk, $catatan_mk, $deadline_mk) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    
    $kode_mk = $kode_mk;
    $nama_mk = $nama_mk;
    $catatan_mk = $catatan_mk;
    $deadline_mk = $deadline_mk;
    
    include "command/updateDataCatatan.php";

    $message = updateDataCatatan($id_user, $kode_mk, $nama_mk, $catatan_mk, $deadline_mk);
    $bot->reply($message);

});

$botman->hears("/hapus_catatan_tugas_kuliah@Aisyah_Bukan_Bot", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";

    $bot->reply("Format Hapus Catatan Tugas Kuliah :\n\n/hapus_catatan [Pilih ID Kode MK Yang Ingin Dihapus]\n\n*Tanpa Tanda Kurung []");
});

$botman->hears("/hapus_catatan@Aisyah_Bukan_Bot {kode_mk}", function (Botman $bot, $kode_mk) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    include "command/requestChat.php";
    
    $kode_mk = $kode_mk;
    
    include "command/delDataCatatan.php";

    $message = delDataCatatan($id_user, $kode_mk);
    $bot->reply($message);

});


// command not found
$botman->fallback(function (BotMan $bot) {
    $message = $bot->getMessage()->getText();
    $bot->reply("Maaf, Perintah Ini '$message' Tidak Ada 😥");
});


$botman->listen();
<?php
require_once 'command/chat.php';
    
$user = $bot->getUser();
$id_user = $user->getId();

// check new data user apakah sebelumnya sudah terdaftar
$dataDB	= ChatTele\checkDataUser($id_user);

// ambil data default user
$dataUser = ChatTele\getDataUser($user);

// jika data user belum ada, maka diinsert baru
if (!(array) $dataDB) {
    ChatTele\insertNewUser($dataUser);
}
else {
	
}
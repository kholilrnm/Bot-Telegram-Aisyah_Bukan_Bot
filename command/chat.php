<?php  

namespace ChatTele;

require_once 'database/configDB.php';

date_default_timezone_set('Asia/Jakarta');

function checkDataUser($id_user) {
    $querySelectData    = "SELECT * FROM tb_datauser WHERE id_user = $id_user LIMIT 1";
    $resultQuery        = mysqli_query(connDB(), $querySelectData);

    return (object) mysqli_fetch_assoc($resultQuery);
}

function getDataUser($user) {
    $data   = [
        "id_user"   		=> 	$user->getId(),
        "nama"      		=> 	$user->getFirstName()
    ];

    return (object) $data;
}

function insertNewUser($dataUser) {
    $queryInsertNewUser    = "INSERT INTO tb_datauser (id_user, nama)
                            VALUES ($dataUser->id_user, '$dataUser->nama')";

    mysqli_query(connDB(), $queryInsertNewUser);
}



?>
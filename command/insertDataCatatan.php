<?php 
require_once 'database/configDB.php';


function insertDataCatatan($id_user, $nama_mk, $catatan_mk, $deadline_mk){

    $queryInsertCatatan = "INSERT INTO tb_catatan_mk (nama_mk, catatan_mk, deadline_mk, id_user) VALUES ('$nama_mk', '$catatan_mk', '$deadline_mk', '$id_user')";
    $resultQueryInsert  = mysqli_query(connDB(), $queryInsertCatatan);

    if ($resultQueryInsert) {
    	$message = "Data Telah Tersimpan 😉";
    }
    else{
    	$message = "Data Gagal Disimpan, Cek Kembali 😱";
    }
    
    return $message;
}

?>
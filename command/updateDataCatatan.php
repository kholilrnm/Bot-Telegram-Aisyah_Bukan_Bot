<?php 
require_once 'database/configDB.php';


function updateDataCatatan($id_user, $kode_mk, $nama_mk, $catatan_mk, $deadline_mk){
	// pengecekan data terlebih dahulu sebelum di eksekusi
	$queryFlagUpdate = "SELECT id_mk FROM tb_catatan_mk WHERE id_user = $id_user AND id_mk=$kode_mk";
	$resultQueryFlag  = mysqli_query(connDB(), $queryFlagUpdate); 

    $message = "";

    // ketika data ada dan sesuai eksekusi bro
    if ($resultQueryFlag->num_rows > 0) {
    	
	    $queryUpdateCatatan = "UPDATE tb_catatan_mk SET nama_mk='$nama_mk', catatan_mk='$catatan_mk', deadline_mk='$deadline_mk' WHERE id_user=$id_user AND id_mk=$kode_mk";
	    $resultQueryUpdate  = mysqli_query(connDB(), $queryUpdateCatatan);

    	$message = "Data Telah Diubah 😉";

    }
    else{
    	$message = "Data Gagal Diubah, Mohon Cek Kembali 😱";
    }
    
    return $message;
}

?>
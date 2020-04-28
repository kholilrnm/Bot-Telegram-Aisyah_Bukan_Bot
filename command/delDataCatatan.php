<?php 
require_once 'database/configDB.php';


function delDataCatatan($id_user, $kode_mk){
	// pengecekan data terlebih dahulu sebelum di eksekusi
	$queryFlagDelete = "SELECT id_mk FROM tb_catatan_mk WHERE id_user = $id_user AND id_mk=$kode_mk";
	$resultQueryFlag  = mysqli_query(connDB(), $queryFlagDelete); 

    $message = "";

    // jika data ada maka dihapus sesuai benar id nya
    if ($resultQueryFlag->num_rows > 0) {

    	$queryDeleteCatatan = "DELETE FROM tb_catatan_mk WHERE id_mk=$kode_mk AND id_user=$id_user";
		$resultQueryDelete  = mysqli_query(connDB(), $queryDeleteCatatan);

    	$message = "Data Telah Terhapus 😉";
    	
    }
    else{
    	$message = "Data Gagal Dihapus, Cek Kembali 😱";
    }

    return $message;
}

?>
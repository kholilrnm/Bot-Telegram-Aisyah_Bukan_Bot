<?php 
require_once 'database/configDB.php';


function cariDataCatatan($id_user, $kode_mk){
	// pengecekan data terlebih dahulu sebelum di eksekusi
	$queryCariDataCatatan = "SELECT * FROM tb_catatan_mk WHERE id_user = $id_user AND id_mk=$kode_mk";
	$resultQueryFlag  = mysqli_query(connDB(), $queryCariDataCatatan); 

    $message = "";

    // ketika data ada dan sesuai eksekusi bro
    if ($resultQueryFlag->num_rows > 0) {
        while ($viewDataCatatanUser = mysqli_fetch_assoc($resultQueryFlag)) {
            $resultCatatanUser = (object) $viewDataCatatanUser;
            
            $message .= "ID M.K   : " . $resultCatatanUser->id_mk . PHP_EOL;
            $message .= "Nama M.K   : " . $resultCatatanUser->nama_mk . PHP_EOL;
            $message .= "Catatan M.K   : " . $resultCatatanUser->catatan_mk . PHP_EOL;
            $message .= "Deadline M.K   : " . $resultCatatanUser->deadline_mk . PHP_EOL;
            $message .= "\n";

        }
    }
    else {
        $message = "Data Masih Kosong 🙄";
    }
    
    return $message;
}

?>
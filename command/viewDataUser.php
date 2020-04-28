<?php 
require_once 'database/configDB.php';

function viewCatatanUser($id_user){

    $queryViewCatatanUser = "SELECT id_mk, nama_mk, catatan_mk, deadline_mk FROM tb_catatan_mk WHERE id_user = $id_user";
    $resultQueryView      = mysqli_query(connDB(), $queryViewCatatanUser);

    $message = "";

    if ($resultQueryView->num_rows > 0) {
        while ($viewDataCatatanUser = mysqli_fetch_assoc($resultQueryView)) {
            $resultCatatanUser = (object) $viewDataCatatanUser;
            
            $message .= "ID M.K   : " . $resultCatatanUser->id_mk . PHP_EOL;
            $message .= "Nama M.K   : " . $resultCatatanUser->nama_mk . PHP_EOL;
            $message .= "Catatan M.K   : " . $resultCatatanUser->catatan_mk . PHP_EOL;
            $message .= "Deadline M.K   : " . $resultCatatanUser->deadline_mk . PHP_EOL;
            $message .= "\n";

        }
    }
    else{
        $message = "Data Masih Kosong 🙄";
    }

    return $message;
    
}

?>
<?php 

function connDB() {

   $dbServer = 'localhost';
   $dbUser = 'pmhwebid_aisyah';
   $dbPass = 'aisyahsalma';
   $dbName = "pmhwebid_Aisyah_Bukan_Bot";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(!$conn) {
         die('Koneksi gagal: ' . mysqli_error());
   }
   
   mysqli_select_db($conn, $dbName);
  
   return $conn;
}
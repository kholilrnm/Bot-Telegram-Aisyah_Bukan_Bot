<?php 

function connDB() {

   $dbServer = 'localhost';
   $dbUser = '..';
   $dbPass = '..';
   $dbName = "..";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(!$conn) {
         die('Koneksi gagal: ' . mysqli_error());
   }
   
   mysqli_select_db($conn, $dbName);
  
   return $conn;
}

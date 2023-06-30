<?php
$servername = "localhost";
$Username = "root";
$pass = "";
$dbname = "db_movie";
//Membuat Koneksi ke MySQL
$conn = new mysqli($servername, $Username, $pass, $dbname);
//Cek Koneksi
if ($conn->connect_error) {
   	die("koneksi gagal: " . $conn->connect_error);
} 
?>

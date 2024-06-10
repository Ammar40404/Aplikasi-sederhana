<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "toko_komputer"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

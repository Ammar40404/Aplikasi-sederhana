<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'koneksi.php';

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "UPDATE Produk SET 
    Nama_Produk='$nama_produk', 
    Deskripsi='$deskripsi', 
    Harga=$harga, 
    Stok=$stok
    WHERE ID_Produk=$id_produk";

if ($conn->query($sql) === TRUE) {
    header("Location: tabel.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

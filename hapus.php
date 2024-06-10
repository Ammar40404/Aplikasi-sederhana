<?php
include 'koneksi.php';

$id_produk = $_GET['id'];

$sql = "DELETE FROM Produk WHERE ID_Produk=$id_produk";

if ($conn->query($sql) === TRUE) {
    header("Location: tabel.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

<?php
include 'koneksi.php';

$nama_produk = @$_POST['nama_produk'];
$deskripsi = @$_POST['deskripsi'];
$harga = @$_POST['harga'];
$stok = @$_POST['stok'];

if ($nama_produk && $deskripsi && $harga && $stok) {
    // Menyimpan data ke database
    $sql = "INSERT INTO Produk (Nama_Produk, Deskripsi, Harga, Stok) 
            VALUES ('$nama_produk', '$deskripsi', $harga, $stok)";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Produk berhasil ditambahkan</h2>";
        echo "<strong>Nama Produk:</strong> $nama_produk <br>";
        echo "<strong>Deskripsi:</strong> $deskripsi <br>";
        echo "<strong>Harga:</strong> $harga <br>";
        echo "<strong>Stok:</strong> $stok <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Produk Baru</title>
    <link rel="stylesheet" type="text/css" href="stylek.css">
</head>
<body>
    <h2>Tambah Produk Baru</h2>

    <form method="POST">
        <p>
            <label>Nama Produk:</label>
            <input type="text" name="nama_produk">
        </p>
        <p>
            <label>Deskripsi:</label>
            <textarea name="deskripsi"></textarea>
        </p>
        <p>
            <label>Harga:</label>
            <input type="text" name="harga">
        </p>
        <p>
            <label>Stok:</label>
            <input type="text" name="stok">
        </p>
        <p>
            <button type="submit">Tambah Produk</button>
            <button type="reset">Batal</button>
            <a href="tabel.php">Lihat Produk</a>
        </p>
    </form>
</body>
</html>

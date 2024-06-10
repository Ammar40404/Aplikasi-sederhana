<?php
include 'koneksi.php';

$id_produk = $_GET['id'];
$sql = "SELECT * FROM Produk WHERE ID_Produk=$id_produk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Produk</title>
    <link rel="stylesheet" type="text/css" href="stylek.css">
</head>
<body>
    <h2>Edit Data Produk</h2>

    <form action="update.php" method="post">
        <input type="hidden" name="id_produk" value="<?php echo $row['ID_Produk']; ?>">
        <p>
            <label>Nama Produk:</label>
            <input type="text" name="nama_produk" value="<?php echo $row['Nama_Produk']; ?>">
        </p>
        <p>
            <label>Deskripsi:</label>
            <textarea name="deskripsi"><?php echo $row['Deskripsi']; ?></textarea>
        </p>
        <p>
            <label>Harga:</label>
            <input type="text" name="harga" value="<?php echo $row['Harga']; ?>">
        </p>
        <p>
            <label>Stok:</label>
            <input type="text" name="stok" value="<?php echo $row['Stok']; ?>">
        </p>
        <p>
            <input type="submit" value="Update">
            <a href="tabel.php">Kembali</a>
        </p>
    </form>
</body>
</html>

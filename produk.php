<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Data Produk</h2>
    <table>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
            $sql = "SELECT * FROM Produk";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["ID_Produk"]."</td><td>".$row["Nama_Produk"]."</td><td>".$row["Deskripsi"]."</td><td>".$row["Harga"]."</td><td>".$row["Stok"]."</td></tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </table>
</body>
</html>

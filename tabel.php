<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Produk</title>
    <link rel="stylesheet" type="text/css" href="stylek.css">
</head>
<body>
    <h2>Daftar Produk</h2>

    <nav>
        <a href="tugasp5(8).php">[+] Tambah Produk Baru</a>
    </nav>
    <table border="1">
        <tr>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM Produk";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Nama_Produk"] . "</td>";
                echo "<td>" . $row["Deskripsi"] . "</td>";
                echo "<td>" . $row["Harga"] . "</td>";
                echo "<td>" . $row["Stok"] . "</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$row['ID_Produk']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$row['ID_Produk']."' onclick=\"return confirm('Apakah Anda yakin ingin menghapus produk ini?')\">Hapus</a>";
                echo "</td>";
               
echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada produk</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
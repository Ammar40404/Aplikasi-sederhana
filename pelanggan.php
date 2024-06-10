<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Data Pelanggan</h2>
    <table>
        <tr>
            <th>ID Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
        </tr>
        <?php
            $sql = "SELECT * FROM Pelanggan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["ID_Pelanggan"]."</td><td>".$row["Nama_Pelanggan"]."</td><td>".$row["Alamat"]."</td><td>".$row["Nomor_Telepon"]."</td><td>".$row["Email"]."</td></tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </table>
</body>
</html>

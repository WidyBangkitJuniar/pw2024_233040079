<?php
    // cek apakah tidak ada data di $_GET
if( !isset($_GET["gambar"]) ||
    !isset($_GET["produk"]) ||
    !isset($_GET["jenis"]) ||
    !isset($_GET["warnak"]) ||
    !isset($_GET["ukuran"]) ||
    !isset($_GET["harga"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Detail Sepatu</h1>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["produk"]; ?></li>
        <li><?= $_GET["jenis"]; ?></li>
        <li><?= $_GET["warna"]; ?></li>
        <li><?= $_GET["ukuran"]; ?></li>
        <li><?= $_GET["harga"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali Ke Daftar Sepatu</a>
</body>
</html>
<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 7 - 14 Maret 2021
Mempelajari mengenai get & post pada PHP
*/
?>
<?php 
//  cek apakah tidak ada data di $_GET
if( !isset ($_GET["nama"]) || 
    !isset ( $_GET["harga"]) ||
    !isset ( $_GET["transmisi"]) ||
    !isset ( $_GET["bahanbakar"]) ||
    !isset ($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>Harga : <?= $_GET["harga"]; ?></li>
        <li>Transmisi : <?= $_GET["transmisi"]; ?></li>
        <li>Bahan Bakar : <?= $_GET["bahanbakar"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mobil</a>
</body>
</html>
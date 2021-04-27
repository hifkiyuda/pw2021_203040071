<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 10 - 23 Maret 2021
Mempelajari mengenai Koneksi DB
*/
?>
<?php 
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mobil berdasarkan id
$mb = query("SELECT * FROM mobil WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../semantic/dist/semantic.min.js"></script>
</head>
<body>
    <h3>Detail Mobil</h3>

    <ul>
        <li><img src="img/<?= $mb['gambar']; ?>" width="200"></li>
        <li><?= $mb['nama']; ?></li>
        <li><?= $mb['harga']; ?></li>
        <li><?= $mb['transmisi']; ?></li>
        <li><?= $mb['bahanbakar']; ?></li>
        <li>
            <a href="">ubah</a> | <a href="">hapus</a>
        </li>
        <li><a href="latihan3.php">Kembali ke daftar harga mobil</a></li>
    </ul>

</body>
</html>
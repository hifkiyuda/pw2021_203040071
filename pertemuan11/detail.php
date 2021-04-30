<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 11 - 30 April 2021
Mempelajari mengenai Delete & Update Data dan Searching Data
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
            <a href="ubah.php?id=<?= $mb['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $mb['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a>
        </li>
        <li><a href="index.php">Kembali ke daftar harga mobil</a></li>
    </ul>

</body>
</html>
<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 10 - 27 April 2021
Mempelajari mengenai Koneksi DB dan Insert Data
*/
?>
<?php 
require 'functions.php';
$mobil = query("SELECT * FROM mobil");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../semantic/dist/semantic.min.js"></script>
</head>
<body>
    <div class="ui container">
        <h3>Daftar Harga Mobil</h3>

        <a href="tambah.php">Tambah Data Mobil</a>
        <br><br>

        <table class="ui celled table selectable padded table">
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;
            foreach($mobil as $mb) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $mb['gambar']; ?>" width="200"></td>
                <td><?= $mb['nama']; ?></td>
                <td>
                    <a href="detail.php?id=<?= $mb['id']; ?>">lihat detail</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
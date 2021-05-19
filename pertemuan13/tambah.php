<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 13 - 19 Mei 2021
Mempelajari mengenai AJAX Live Search dan Upload Gambar
*/
?>
<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mobil</title>
</head>
<body>
    <h3>Form Tambah Data Mobil</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label>
                    Gambar :
                    <input type="file" name="gambar" autofocus class="gambar" onchange="previewImage()">
                </label>
                <img src="img/nophoto.png" width="120" style="display: block;" class="img-preview">
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" require>
                </label>
            </li>
            <li>
                <label>
                    Harga :
                    <input type="text" name="harga" require>
                </label>
            </li>
            <li>
                <label>
                    Transmisi :
                    <input type="text" name="transmisi" require>
                </label>
            </li>
            <li>
                <label>
                    Bahan Bakar :
                    <input type="text" name="bahanbakar" require>
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>

    <script src="js/script.js"></script>
</body>
</html>
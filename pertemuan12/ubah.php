<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 12 - 7 Mei 2021
Mempelajari mengenai Login dan Registrasi
*/
?>
<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// jika tidak ada id di url
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mobil berdasarkan id
$mb = query("SELECT * FROM mobil WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if(isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal diubah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mobil</title>
</head>
<body>
    <h3>Form Ubah Data Mobil</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mb['id']; ?>">
        <ul>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" autofocus require value="<?= $mb['gambar']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" require value="<?= $mb['nama']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Harga :
                    <input type="text" name="harga" require value="<?= $mb['harga']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Transmisi :
                    <input type="text" name="transmisi" require value="<?= $mb['transmisi']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Bahan Bakar :
                    <input type="text" name="bahanbakar" require value="<?= $mb['bahanbakar']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>
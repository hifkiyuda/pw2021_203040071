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

// cek apakah tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>";
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
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" autofocus require>
                </label>
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
</body>
</html>
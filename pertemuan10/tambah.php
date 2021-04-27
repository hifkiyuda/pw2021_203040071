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

// cek apakah tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'latihan3.php';
            </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'latihan3.php';
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
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../semantic/dist/semantic.min.js"></script>
    <style>
        ul {
            list-style: none;
        }
        ul li {
            margin-bottom: 10px;
        }
        form {
            margin: auto 100px;
        }
        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="ui container">
        <h3>Form Tambah Data Mobil</h3>
        <form action="" method="POST" class="ui form">
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
                    <button type="submit" name="tambah" class="ui fluid large submit button">Tambah Data!</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>
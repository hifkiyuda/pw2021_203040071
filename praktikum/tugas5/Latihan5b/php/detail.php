<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$movies = query("SELECT * FROM movies WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $movies["poster"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $movies["judul"]; ?></p>
            <p><?= $movies["cast"]; ?></p>
            <p><?= $movies["rating"]; ?></p>
            <p><?= $movies["genre"]; ?></p>
            <p><?= $movies["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>
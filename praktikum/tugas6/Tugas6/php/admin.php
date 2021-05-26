<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';
// melakukan query
$movies = query("SELECT * FROM movies");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $movies = query("SELECT * FROM movies WHERE
            `judul` LIKE '%$keyword%' OR
            `cast` LIKE '%$keyword%' OR
            `rating` LIKE '%$keyword%' OR
            `genre` LIKE '%$keyword%' OR
            `harga` LIKE '%$keyword%' ");
} else {
    $movies = query("SELECT * FROM movies");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../semantic/dist/semantic.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="add">
            <a href="logout.php">
                <button type="" class="ui button" style="background-color: #FF0000; color: white;">Logout</button>
            </a>
            <a href="tambah.php">
                <button type="" class="ui button">Tambah Data</button>
            </a>
        </div>
        <div class="cari">
            <form action="" method="get" class="ui action input">
                <input type="text" placeholder="Cari..." name="keyword" autofocus>
                <button class="ui button" type="submit" name="cari">Cari!</button>
            </form>
        </div>
    </div>
    <table class="ui celled table selectable padded table">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Poster</th>
                <th>Judul</th>
                <th>Cast</th>
                <th>Rating</th>
                <th>Genre</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
        <?php if (empty($movies)) : ?>
            <tr>
                <td colspan="8">
                    <h1>FIlm Tidak Ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($movies as $mv) : ?>
                <tr>
                    <td style="font-weight: 600;"><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $mv['id'] ?>"><button class="ui button" style="margin: 5px; background-color: #50C878; color: white;">Ubah</button></a>
                        <a href="hapus.php?id=<?= $mv['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="ui button" style="margin: 5px; background-color: #FF0000; color: white;">Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $mv['poster']; ?>" alt=""></td>
                    <td><?= $mv['judul']; ?></td>
                    <td><?= $mv['cast']; ?></td>
                    <td><?= $mv['rating']; ?></td>
                    <td><?= $mv['genre']; ?></td>
                    <td><?= $mv['harga']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
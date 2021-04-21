<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
// Menghubungkan dengan file php lainnya
require 'php/functions.php';
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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>

</head>
<body>
    <div class="header">
        <div class="add">
            <a href="php/login.php">
                <button type="" class="ui button">Masuk ke halaman admin</button>
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
                    <h1>Film Tidak Ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($movies as $mv) : ?>
            <tr>
                <td style="font-weight: 600;"><?= $i; ?></td>
                <td><img src="assets/img/<?= $mv['poster']; ?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?= $mv['id']; ?>">
                        <?= $mv["judul"]; ?>
                    </a>
                </td>
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
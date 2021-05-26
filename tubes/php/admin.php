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
    <title>plotwist | Admin</title>
    <!-- My Logo -->
    <link rel="icon" href="../assets/img/plotwist.png">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <nav class="navbar pt-2 admin" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-start">
                <div class="navbar-item">
                    <a href="logout.php">
                    <button type="" class="button is-danger">Logout</button>
                    </a>
                </div>
                <div class="navbar-item">
                    <a href="tambah.php">
                        <button type="" class="button is-white">Tambah Data</button>
                    </a>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field has-addons">
                        <div class="control" style="margin-right: 30px;">
                            <form action="" method="GET">
                                <input class="input keyword" type="text" placeholder="Cari..." name="keyword">
                                <button class="button is-white tombol-cari" type="submit" name="cari">
                                    <span class="icon is-small">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="section admin">
        <div class="container">
            <table class="table is-hoverable is-bordered">
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
                                <a href="ubah.php?id=<?= $mv['id'] ?>">
                                    <button class="ui button is-success">
                                        <span class="icon is-small">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </button>
                                </a>
                                <a href="hapus.php?id=<?= $mv['id']; ?>" onclick="return confirm('Hapus Data??')">
                                    <button class="button is-danger" style="margin-top: 10px;">
                                        <span class="icon is-small">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                    </button>
                                </a>
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
        </div>
    </div>
    
</body>
</html>
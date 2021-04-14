<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';
// melakukan query
$movies = query("SELECT * FROM movies");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
    <link rel="stylesheet" href="../css/style.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
</head>
<body style="margin: auto 100px;">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>

    <table class="highlight centered">
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
            <?php $i = 1; ?>
            <?php foreach ($movies as $mv) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href=""><button style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                        <a href="hapus.php?id=<?= $mv['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
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
        </tbody>
    </table>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
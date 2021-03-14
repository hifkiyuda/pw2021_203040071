<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 7 - 14 Maret 2021
Mempelajari mengenai get & post pada PHP
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<!-- perbedaan method "get"=>data yang dimasukkan ada di url  "post"=>tidak ada di url -->
    <p>action yang datanya dikirim ke halaman lain</p>
    <form action="latihan4.php" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>

    <p>action yang datanya dikirim ke halaman ini</p>
    <?php if(isset($_POST["submit"])) : ?>
        <h1>Hallo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <form action="" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>
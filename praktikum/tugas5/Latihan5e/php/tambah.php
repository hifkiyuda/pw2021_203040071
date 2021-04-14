<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
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
    <title>203040071</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<body style="font-family: Arial, sans-serif;">
    <h3>Form Tambah Data Film</h3>
    <form action="" method="post">
        <ul style="list-style: none;">
            <li>
                <label for="judul" style="margin-right: 8px;">Poster</label>
                : <input type="text" name="poster" id="poster" require><br><br>
            </li>
            <li>
                <label for="judul" style="margin-right: 16px;">Judul</label>
                : <input type="text" name="judul" id="judul" require><br><br>
            </li>
            <li>
                <label for="cast" style="margin-right: 21px;">Cast</label>
                : <input type="text" name="cast" id="cast" require><br><br>
            </li>
            <li>
                <label for="genre" style="margin-right: 9px;">Genre</label>
                : <input type="text" name="genre" id="genre" require><br><br>
            </li>
            <li>
                <label for="rating" style="margin-right: 7px;">Rating</label>
                : <input type="text" name="rating" id="rating" require><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 10px;">Harga</label>
                : <input type="text" name="harga" id="harga" require><br><br>
            </li>
            <button type="submit" name="tambah" style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>
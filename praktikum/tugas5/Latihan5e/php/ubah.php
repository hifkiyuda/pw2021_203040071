<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
require 'functions.php';

$id = $_GET['id'];
$mv = query("SELECT * FROM movies WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h3>Form Ubah Data Film</h3>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $mv['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="judul" style="margin-right: 8px;">Poster</label>
                : <input type="text" name="poster" id="poster" require value="<?= $mv['poster']; ?>"><br><br>
            </li>
            <li>
                <label for="judul" style="margin-right: 16px;">Judul</label>
                : <input type="text" name="judul" id="judul" require value="<?= $mv['judul']; ?>"><br><br>
            </li>
            <li>
                <label for="cast" style="margin-right: 21px;">Cast</label>
                : <input type="text" name="cast" id="cast" require value="<?= $mv['cast']; ?>"><br><br>
            </li>
            <li>
                <label for="genre" style="margin-right: 9px;">Genre</label>
                : <input type="text" name="genre" id="genre" require value="<?= $mv['genre']; ?>"><br><br>
            </li>
            <li>
                <label for="rating" style="margin-right: 7px;">Rating</label>
                : <input type="text" name="rating" id="rating" require value="<?= $mv['rating']; ?>"><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 10px;">Harga</label>
                : <input type="text" name="harga" id="harga" require value="<?= $mv['harga']; ?>"><br><br>
            </li>
            <button type="submit" name="ubah" style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Ubah Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>
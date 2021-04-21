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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../semantic/dist/semantic.min.js"></script>
</head>
<body>
    <h2>Form Ubah Data Film</h2>
    <div class="ui center aligned tambah-ubah">
        <form action="" method="post" class="ui large form">
        <input type="hidden" name="id" id="id" value="<?= $mv['id']; ?>">
            <div class="tambahubah-form">
                <div class="field">
                    <label for="judul""></label>
                    <input type="text" name="poster" id="poster" placeholder="poster" require value="<?= $mv['poster']; ?>"><br><br>
                </div>
                <div class="field">
                    <label for="judul"></label>
                    <input type="text" name="judul" id="judul" placeholder="judul" require value="<?= $mv['judul']; ?>"><br><br>
                </div>
                <div>
                    <label for="cast"></label>
                    <input type="text" name="cast" id="cast" placeholder="cast" require value="<?= $mv['cast']; ?>"><br><br>
                </div class="field">
                <div>
                    <label for="genre"></label>
                    <input type="text" name="genre" id="genre"  placeholder="genre"require value="<?= $mv['genre']; ?>"><br><br>
                </div class="field">
                <div>
                    <label for="rating"></label>
                    <input type="text" name="rating" id="rating" placeholder="rating" require value="<?= $mv['rating']; ?>"><br><br>
                </div>
                <div class="field">
                    <label for="harga"></label>
                    <input type="text" name="harga" id="harga" placeholder="harga" require value="<?= $mv['harga']; ?>"><br><br>
                </div>
            </div>
            <div class="tambahubah-btn">
                <button type="submit" name="ubah" class="ui fluid large submit button">Ubah Data</button>
                <button type="submit" class="ui fluid large submit button">
                    <a href="admin.php">Kembali</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
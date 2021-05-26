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
    <title>plotwist | Form Ubah Data</title>
    <!-- My Logo -->
    <link rel="icon" href="../assets/img/plotwist.png">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section class="section" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-9-tablet is-8-desktop is-8-widescreen">
                    <div class="title has-text-centered" style="color: white; margin-top: -30px;">
                        <p>Form Ubah Data Film</p>
                    </div>
                    <form action="" method="post" class="box" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $mv['id']; ?>">
                        <div class="field">
                            <input type="hidden" name="poster_lama" value="<?= $mv['poster']; ?>">
                            <label class="label" for="poster"></label>
                            <input class="input poster" type="file" name="poster" id="poster" placeholder="poster" onchange="previewImage()"><br><br>
                            <img src="../assets/img/<?= $mv['poster']; ?>" width="100" class="img-preview" alt="">
                        </div>
                        <div class="field">
                            <label class="label" for="judul"></label>
                            <input class="input" type="text" name="judul" id="judul" placeholder="judul" require value="<?= $mv['judul']; ?>"><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="cast"></label>
                            <input class="input" type="text" name="cast" id="cast" placeholder="cast" require value="<?= $mv['cast']; ?>"><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="genre"></label>
                            <input class="input" type="text" name="genre" id="genre"  placeholder="genre"require value="<?= $mv['genre']; ?>"><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="rating"></label>
                            <input class="input" type="text" name="rating" id="rating" placeholder="rating" require value="<?= $mv['rating']; ?>"><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="harga"></label>
                            <input class="input" type="text" name="harga" id="harga" placeholder="harga" require value="<?= $mv['harga']; ?>"><br><br>
                        </div>
                        <div class="field">
                            <button type="submit" name="ubah" class="button is-success">Ubah Data</button>
                            <button type="submit" class="button is-info">
                                <a href="admin.php" style="color: white;">Kembali</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/main.js"></script>
</body>
</html>
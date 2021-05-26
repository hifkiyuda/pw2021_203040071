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
    <title>plotwist | Form Tambah Data</title>
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
                <div class="column is-8-tablet is-8-desktop is-8-widescreen">
                    <div class="title has-text-centered" style="color: white; margin-top: -30px;">
                        <p>Form Tambah Data Film</p>
                    </div>
                    <form action="" method="post" class="box" enctype="multipart/form-data">
                        <div class="field">
                            <label class="label" for="poster"></label>
                            <input class="input poster" type="file" name="poster" id="poster" placeholder="poster" onchange="previewImage()"><br><br>
                            <img src="../assets/img/noimage.png" width="100" class="img-preview" alt="">
                        </div>
                        <div class="field">
                            <label class="label" for="judul"></label>
                            <input class="input" type="text" name="judul" id="judul" placeholder="judul" require><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="cast"></label>
                            <input class="input" type="text" name="cast" id="cast" placeholder="cast" require><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="genre"></label>
                            <input class="input" type="text" name="genre" id="genre"  placeholder="genre"require><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="rating"></label>
                            <input class="input" type="text" name="rating" id="rating" placeholder="rating" require><br><br>
                        </div>
                        <div class="field">
                            <label class="label" for="harga"></label>
                            <input class="input" type="text" name="harga" id="harga" placeholder="harga" require><br><br>
                        </div>
                        <div class="field">
                            <button type="submit" name="tambah" class="button is-success">Tambah Data</button>
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
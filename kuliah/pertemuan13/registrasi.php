<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 13 - 19 Mei 2021
Mempelajari mengenai AJAX Live Search dan Upload Gambar
*/
?>
<?php 

require 'functions.php';

if(isset($_POST['registrasi'])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan, silahkan login!');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo 'user gagal ditambahkan!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h3>Form Registrasi</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="">
                    Username :
                    <input type="text" name="username" autofocus autocomplete="off" require>
                </label>
            </li>
            <li>
                <label for="">
                    Password :
                    <input type="password" name="password1" require>
                </label>
            </li>
            <li>
                <label for="">
                    Konfirmasi Password :
                    <input type="password" name="password2" require>
                </label>
            </li>
            <li>
                <button type="submit" name="registrasi">Registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>
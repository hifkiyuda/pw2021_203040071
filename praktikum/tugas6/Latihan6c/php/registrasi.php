<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
require 'functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi berhasil');
            document.location.href = 'login.php';
        </script>";
} else {
    echo "<script>
            alert('Registrasi gagal');
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
    <div class="ui center aligned grid log-reg">
        <form action="" method="post" class="ui large form">
            <div class="logreg-form">
                <div class="field">
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="field">
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button class="ui fluid large submit button" type="submit" name="register">REGISTER</button>
            </div>
        </form>
    </div>
</body>
</html>
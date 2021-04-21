<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login, jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    //mengecek USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
        }
        if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("location: ../index.php");
        die;
    }
    $error = true;
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
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username atau password salah</p>
                <?php endif; ?>
                <div class="field">
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="field">
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="remember">
                    <div class="ui checkbox">
                        <input type="checkbox" name="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <button class="ui fluid large submit button" type="submit" name="submit">Login</button>
            </div>
            <div class="registrasi ui message">
                <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
            </div>
        </form>
    </div>
</body>
</html>
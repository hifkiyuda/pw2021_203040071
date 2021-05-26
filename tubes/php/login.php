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
            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plotwist | Login</title>
    <!-- My Logo -->
    <link rel="icon" href="../assets/img/plotwist.png">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="section login">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-4-widescreen">
                    <div class="title has-text-centered">
                        <p>plotwist</p>
                    </div>
                    <form action="" method="post" class="box">
                        <p class="subtitle has-text-centered is-4" style="font-weight: 600;">
                            Login
                        </p>
                        <?php if (isset($error)) : ?>
                            <div class="card" style="background-color: salmon;">
                                <p style="font-style: italic; padding: 10px 10px;">Username atau password salah</p>
                            </div>
                        <?php endif; ?>
                        <div class="field">
                            <label class="label" for="username">Username</label>
                            <div class="control has-icons-left">
                                <input class="input is-success" type="text" placeholder="Username" name="username">
                                <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="password">Password</label>
                            <p class="control has-icons-left">
                                <input class="input" type="password" placeholder="Password" name="password">
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="remember">
                            <label class="checkbox" for="remember">Remember me</label>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-success" type="submit" name="submit">
                                Login
                                </button>
                            </p>
                        </div>
                        <div class="registrasi">
                            <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
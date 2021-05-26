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
    <title>plotwist | Registrasi</title>
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
    <div class="section register">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-4-widescreen">
                    <div class="title has-text-centered">
                        <p>plotwist</p>
                    </div>
                    <form action="" method="post" class="box">
                        <div class="field">
                            <p class="subtitle has-text-centered is-4" style="font-weight: 600;">
                                Registrasi
                            </p>
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
                            <p class="control">
                                <button class="button is-success" type="submit" name="register">
                                Register
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
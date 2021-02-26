<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 4 - 26 Februari 2021
Mempelajari mengenai function PHP
*/
?>
<?php
// User-Defined Function
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Siang", "Hifki"); ?></h1>
</body>
</html>
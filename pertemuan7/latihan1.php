<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 7 - 14 Maret 2021
Mempelajari mengenai get & post pada PHP
*/
?>
<?php 
// Variabel Scope / lingkup variabel
$x = 10;

function tampilX() {
    // variabel local
    $x = 20;
    echo $x;
    echo "<br>";
    // variabel global (menampilkan variabel $x di baris 12)
    global $x;
    echo $x;
}
tampilX();
echo "<br>";

// SUPERGLOBALS
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// variabel global milik PHP
// merupakan Array Associative
// var_dump($_SERVER);
echo $_SERVER["SERVER_NAME"];
echo "<br>";

// $_GET
// cara 1 :
$_GET["nama"] = "Hifki Yuda Pratama";
$_GET["nrp"] = "203040071";
var_dump($_GET);
// cara 2 : menggunakan string di dalam url-nya / alamat websitenya
// http://localhost/pw2021_203040071/pertemuan7/latihan1.php?nama=Hifki%20Yuda%20Pratama&nrp=203040071

$mobil = [
    [
        "nama" => "Toyota Kijang Innova",
        "harga" => "Rp 337,6 juta",
        "transmisi" => "manual",
        "bahanbakar" => "bensin",
        "gambar" => "innova.jpeg",
    ],
    [
        "nama" => "Honda Brio",
        "harga" => "Rp 149 juta",
        "transmisi" => "manual",
        "bahanbakar" => "bensin",
        "gambar" => "brio.jpeg"
    ],
    [
        "nama" => "Honda CR-V",
        "harga" => "Rp 489 juta",
        "transmisi" => "otomatis",
        "bahanbakar" => "bensin",
        "gambar" => "cr-v.jpeg"
    ],
    [
        "nama" => "Mitsubishi Pajero Sport",
        "harga" => "Rp 733,7 juta",
        "transmisi" => "otomatis",
        "bahanbakar" => "solar",
        "gambar" => "pajero.jpeg"
    ],
    [
        "nama" => "Jeep Wrangler",
        "harga" => "Rp 1,78 milyar",
        "transmisi" => "manual",
        "bahanbakar" => "bensin",
        "gambar" => "wrangler.jpeg"
    ],
    [
        "nama" => "Toyota Hilux",
        "harga" => "Rp 497,65 juta",
        "transmisi" => "otomatis",
        "bahanbakar" => "solar",
        "gambar" => "hilux.jpeg"
    ],
    [
        "nama" => "Toyota Yaris",
        "harga" => "Rp 266,25 juta",
        "transmisi" => "manual",
        "bahanbakar" => "bensin",
        "gambar" => "yaris.jpeg"
    ],
    [
        "nama" => "Suzuki Jimny",
        "harga" => "Rp 382,5 juta",
        "transmisi" => "manual",
        "bahanbakar" => "bensin",
        "gambar" => "jimny.jpeg"
    ],
    [
        "nama" => "BMW 6 Series",
        "harga" => "Rp 1,81 milyar",
        "transmisi" => "otomatis",
        "bahanbakar" => "bensin",
        "gambar" => "bmw6.jpeg"
    ],
    [
        "nama" => "Toyota Vellfire",
        "harga" => "Rp 1,19 milyar",
        "transmisi" => "otomatis",
        "bahanbakar" => "bensin",
        "gambar" => "vellfire.jpeg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Harga Mobil</h1>
    <ul>
        <?php foreach( $mobil as $mb ) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mb["nama"]; ?>
                &harga=<?= $mb["harga"]; ?>
                &transmisi=<?= $mb["transmisi"]; ?>
                &bahanbakar=<?= $mb["bahanbakar"]; ?>
                &gambar=<?= $mb["gambar"]; ?>"><?= $mb["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

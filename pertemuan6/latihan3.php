<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 6 - 9 Maret 2021
Mempelajari mengenai array associative pada PHP
*/
?>
<?php 
$mobil = [
    [
        "nama" => "Toyota Kijang Innova",
        "harga" => "Rp 337,6 juta",
        "transmisi" => "manual",
        "bahan bakar" => "bensin",
        "gambar" => "innova.jpeg",
    ],
    [
        "nama" => "Honda Brio",
        "harga" => "Rp 149 juta",
        "transmisi" => "manual",
        "bahan bakar" => "bensin",
        "gambar" => "brio.jpeg"
    ],
    [
        "nama" => "Honda CR-V",
        "harga" => "Rp 489 juta",
        "transmisi" => "otomatis",
        "bahan bakar" => "bensin",
        "gambar" => "cr-v.jpeg"
    ],
    [
        "nama" => "Mitsubishi Pajero Sport",
        "harga" => "Rp 733,7 juta",
        "transmisi" => "otomatis",
        "bahan bakar" => "solar",
        "gambar" => "pajero.jpeg"
    ],
    [
        "nama" => "Jeep Wrangler",
        "harga" => "Rp 1,78 milyar",
        "transmisi" => "manual",
        "bahan bakar" => "bensin",
        "gambar" => "wrangler.jpeg"
    ],
    [
        "nama" => "Toyota Hilux",
        "harga" => "Rp 497,65 juta",
        "transmisi" => "otomatis",
        "bahan bakar" => "solar",
        "gambar" => "hilux.jpeg"
    ],
    [
        "nama" => "Toyota Yaris",
        "harga" => "Rp 266,25 juta",
        "transmisi" => "manual",
        "bahan bakar" => "bensin",
        "gambar" => "yaris.jpeg"
    ],
    [
        "nama" => "Suzuki Jimny",
        "harga" => "Rp 382,5 juta",
        "transmisi" => "manual",
        "bahan bakar" => "bensin",
        "gambar" => "jimny.jpeg"
    ],
    [
        "nama" => "BMW 6 Series",
        "harga" => "Rp 1,81 milyar",
        "transmisi" => "otomatis",
        "bahan bakar" => "bensin",
        "gambar" => "bmw6.jpeg"
    ],
    [
        "nama" => "Toyota Vellfire",
        "harga" => "Rp 1,19 milyar",
        "transmisi" => "otomatis",
        "bahan bakar" => "bensin",
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
    <title>Daftar Harga Mobil</title>
</head>
<body>
    <h1>Daftar Harga Mobil</h1>
    <?php foreach( $mobil as $mb ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mb["gambar"]; ?>">
            </li>
            <li>Nama        : <?= $mb["nama"]; ?></li>
            <li>Harga       : <?= $mb["harga"]; ?></li>
            <li>Transmisi   : <?= $mb["transmisi"]; ?></li>
            <li>Bahan Bakar : <?= $mb["bahan bakar"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
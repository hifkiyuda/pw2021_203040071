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
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Hifki Yuda Pratama",
        "nrp" => "203040071",
        "email" => "203040071@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "tugas" => [80,90,85]
    ],
    [
        "nama" => "Drink Water",
        "nrp" => "203049999",
        "email" => "203049999@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "tugas" => [75,80,85]
    ]
];

// menampilkan nilai Drink Water = 80
echo $mahasiswa[1]["tugas"][1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
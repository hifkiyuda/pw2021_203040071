<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai array pada PHP
*/
?>
<?php 
$mahasiswa = [
    ["Hifki Yuda Pratama", "203040071", "Teknik Informatika", "203040071@mail.unpas.ac.id"],
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Slamet Hari Natal", "203049998", "Teknik Informatika", "203049998@mail.unpas.ac.id"],
    ["Drink Water", "203049999", "Teknik Informatika", "203049999@mail.unpas.ac.id"]
];
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
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>
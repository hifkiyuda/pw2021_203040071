<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 2 - 12 Februari 2021
Mempelajari mengenai sintaks dasar PHP
*/
?>
<?php


// Standar Output
// echo, print
//echo bisa mencetak string, angka(tanpa kutip), boolean
echo "Hifki Yuda pratama";
echo 203040071;
echo true;
print "Belajar sintaks dasar PHP";

// print_r
print_r ("Teknik Informatika Unpas")

// var_dump
var_dump("Universitas Pasundan")


// Penulisan sintaks PHP
// 1. PHP di dalam HTMl
// 2. HTMl di dalam PHP


// Variabel dan Tipe Data
// Variabel -> cukup diawali tanda $
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama1 = "Hifki Yuda Pratama";
echo "Hallo, nama saya $nama1"

// Interpolasi
// hasilnya : Hallo, nama saya Hifki Yuda Pratama
echo "Hallo, nama saya $nama1";
// hasilnya : Hallo, nama saya $nama1
echo 'Hallo, nama saya $nama1';


// Operator
// Aritmatika
// +  -  *  /  %
$x = 5;
$y = 4;
echo $x + $y;


// Penggabung string / concatenation / concat
// .
$nama_depan = "Hifki";
$nama_belakang = "Yuda";
echo $nama_depan." ".$nama_belakang;


// Assignment
// =  +=  -=  *=  /=  %=  .=
$x = 1;
$x += 2;
echo $x;

$nama = "Hifki";
$nama .= " ";
$nama .= "Yuda";
echo $nama;


// Perbandingan
// <  >  <=  >=  ==  !=
// Tidak mengecek tipe data hanya nilainya
// hasilnya true :
var_dump(1 == "1");


// Identitas
// ===  !==
// hasilnya false :
var_dump(1 === "1");


// Logika
// &&  ||  !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hallo, Selamat Datang <?php echo $nama1; ?></h1>

    <?php
        echo "<h1>Hallo, Selamat Datang Hifki</h1>"
    ?>
</body>
</html>
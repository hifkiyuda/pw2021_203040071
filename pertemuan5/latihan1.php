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
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// keynya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];

$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
?>
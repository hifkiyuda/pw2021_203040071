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
// Build-in Function -> fungsi yang sudah disediakan PHP
// User-Defined Function -> fungsi yang dibuat sendiri

// Build-in Function
// date
// untuk menampilkan tanggal dengan format tertentu
// l -> untuk menampilkan hari(Thursday), D -> menampilkan hari(dalam bentuk singkatan"Thu")
// d -> untuk menampilkan tanggal
// m -> untuk menampilkan bulan(dalam bentuk angka"02"), M -> menampilkan bulan(dalam bentuk nama"Feb")
// Y -> menampilkan tahun(2021), y -> untuk menampilkan tahun(dalam bentuk singkatan"21")
echo date("l, d-M-Y");


// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// menghitung 100 hari kedepan
echo date("l, d-M-Y", time()+60*60*24*100);

// menghitung 100 hari kebelakang
echo date("l, d-M-Y", time()-60*60*24*100);


// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,7,8,2001));


// strtotime
echo date("l", strtotime("8 jul 2001"));

// String
// strlen() -> untuk menghitung panjang sebuah string
// strcmp() -> untuk menggabungkan dua buah string
// explode() -> memecah sebuah string menjadi array
// htmlspecialchars() -> untuk menjaga menjaga dari orang iseng "hacker"

// Utility
// var_dump() -> untuk mencetak isi sebuah variabel, array, object
// isset() -> untuk mengecek sebuah variabel pernah dibuat atau belum, menghasilkan boolean
// empty() -> untuk mengecek variabel apakah ada isinya atau tidak
// die() ->untuk memberhentikan program
// sleep() -> untuk memberhentikan sementara
?>
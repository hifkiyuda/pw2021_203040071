<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 12 - 7 Mei 2021
Mempelajari mengenai Login dan Registrasi
*/
?>
<?php 
session_start();
session_destroy();
header("Location: login.php");
exit;
?>
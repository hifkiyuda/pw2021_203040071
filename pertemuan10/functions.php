<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 10 - 27 April 2021
Mempelajari mengenai Koneksi DB dan Insert Data
*/
?>
<?php 
function koneksi() {
    return mysqli_connect('localhost', 'root', '', 'pw_203040071');
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$query");

    // jika hasilnya hanya 1 data
    if(mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows =[];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return$rows;
}

function tambah($data) {
    $conn = koneksi();
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $transmisi = htmlspecialchars($data['transmisi']);
    $bahanbakar = htmlspecialchars($data['bahanbakar']);
    $query = "INSERT INTO
                mobil
                VALUES
                ('', '$gambar', '$nama', '$harga', '$transmisi', '$bahanbakar');
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
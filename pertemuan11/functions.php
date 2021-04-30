<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 11 - 30 April 2021
Mempelajari mengenai Delete & Update Data dan Searching Data
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
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mobil WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $transmisi = htmlspecialchars($data['transmisi']);
    $bahanbakar = htmlspecialchars($data['bahanbakar']);
    $query = "UPDATE mobil SET
                gambar = '$gambar',
                nama = '$nama',
                harga = '$harga',
                transmisi = '$transmisi',
                bahanbakar = '$bahanbakar'
                WHERE id = $id;
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM mobil
            WHERE 
            nama LIKE '%$keyword%' OR
            transmisi LIKE '%$keyword%' OR
            bahanbakar LIKE '%$keyword%'
            ";

    $result = mysqli_query($conn, $query);

    $rows =[];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return$rows;
}
?>
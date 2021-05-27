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
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040071');

// query isi tabel mobil
$result = mysqli_query($conn, "SELECT * FROM mobil");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array asociative
// $row = mysqli_fetch_array($result); // keduanya
$rows =[];
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// tampung ke tabel mobil
$mobil = $rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
</head>
<body>
    <h3>Daftar Harga Mobil</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Transmisi</th>
            <th>Bahan Bakar</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach($mobil as $mb) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mb['gambar']; ?>" width="200"></td>
            <td><?= $mb['nama']; ?></td>
            <td><?= $mb['harga']; ?></td>
            <td><?= $mb['transmisi']; ?></td>
            <td><?= $mb['bahanbakar']; ?></td>
            <td>
                <a href="">ubah</a> | <a href="">hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
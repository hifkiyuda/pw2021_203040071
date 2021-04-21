<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
// Fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040071");

    return $conn;
}

// Function untuk melakukan query dan memasukkannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi untuk menambahkan data di dalam database
function tambah($data) {
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $cast = htmlspecialchars($data['cast']);
    $genre = htmlspecialchars($data['genre']);
    $rating = htmlspecialchars($data['rating']);
    $harga = htmlspecialchars($data['harga']);
    $poster = htmlspecialchars($data['poster']);

    $query = "INSERT INTO movies
                VALUES
                ('', '$poster', '$judul', '$cast', '$genre', '$rating', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi untuk menghapus data
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM movies WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi untuk ubah data
function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $poster = htmlspecialchars($data['poster']);
    $judul = htmlspecialchars($data['judul']);
    $cast = htmlspecialchars($data['cast']);
    $genre = htmlspecialchars($data['genre']);
    $rating = htmlspecialchars($data['rating']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE `movies` SET `poster`='$poster',`judul`='$judul',`cast`='$cast',`genre`='$genre',`rating`='$rating',`harga`='$harga' WHERE id = $id
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}

// registrasi
function registrasi($data) {
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>
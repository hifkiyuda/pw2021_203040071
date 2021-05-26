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

// Fungsi untuk upload gambar
function upload() {
    $nama_file = $_FILES['poster']['name'];
    $tipe_file = $_FILES['poster']['type'];
    $ukuran_file = $_FILES['poster']['size'];
    $error = $_FILES['poster']['error'];
    $tmp_file = $_FILES['poster']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if($error == 4) {
        // echo "<script>
        //         alert('pilih gambar terlebih dahulu!');
        //     </script>";
        return 'noimage.png';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if(!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek type file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb = 5000000
    if($ukuran_file > 5000000) {
        echo "<script>
                alert('ukuran terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file);

    return $nama_file;
}


// Fungsi untuk menambahkan data di dalam database
function tambah($data) {
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $cast = htmlspecialchars($data['cast']);
    $genre = htmlspecialchars($data['genre']);
    $rating = htmlspecialchars($data['rating']);
    $harga = htmlspecialchars($data['harga']);
    // $poster = htmlspecialchars($data['poster']);

    // upload gambar
    $poster = upload();
    if(!$poster) {
        return false;
    }

    $query = "INSERT INTO movies
                VALUES
                ('', '$poster', '$judul', '$cast', '$genre', '$rating', '$harga')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// Fungsi untuk menghapus data
function hapus($id) {
    $conn = koneksi();

    // menghapus gambar di folder img
    $mvs = query("SELECT * FROM movies WHERE id = $id")[0];
    if($mvs['poster'] != 'noimage.png') {
        unlink('../assets/img/' . $mvs['poster']);
    }

    mysqli_query($conn, "DELETE FROM movies WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// Fungsi untuk ubah data
function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $poster_lama = htmlspecialchars($data['poster_lama']);
    $judul = htmlspecialchars($data['judul']);
    $cast = htmlspecialchars($data['cast']);
    $genre = htmlspecialchars($data['genre']);
    $rating = htmlspecialchars($data['rating']);
    $harga = htmlspecialchars($data['harga']);

    $poster = upload();
    if(!$poster) {
        return false;
    }

    if($poster == 'noimage.png') {
        $poster = $poster_lama;
    }

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
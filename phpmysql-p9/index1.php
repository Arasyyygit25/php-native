<?php
//mengambil data dari file function
require 'function.php';
    //koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

    //ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    //ambil data (fetch) dari object result 
    //mysqli_fetch_row() = mengembalikan array numeric
    //mysqli_fetch_assoc() = mengembalikan array associative
    //mysqli_fetch_array() = mengembalikan array kedua dua nya
    //mysqli_fetch_object()

    //barang dikasih nomor/index
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs[1]);

    //barang dikasih nama/string namun yang keluar hanya 1 nama
    // $mhs = mysqli_fetch_assoc($result);
    // var_dump($mhs["nama"]);

    //data nama keluar semua
    // while ( $mhs = mysqli_fetch_assoc($result) ) {
    // var_dump($mhs["nama"]);
    // }

    // data di dalam tabel akan keluar semua
    // while ( $mhs = mysqli_fetch_assoc($result) ) {
    //     var_dump($mhs);
    //     }

//lebih fleksibel bisa menggunakan index dan string, tapi output ke double
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs["jurusan"]);

// //jarang digunakan
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <!-- analogi: teman bawa lemari keluar -->
    <?php $i = 1; ?>
    <?php while ( $row = mysqli_fetch_assoc($result) ) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
    </table>
</body>
</html>
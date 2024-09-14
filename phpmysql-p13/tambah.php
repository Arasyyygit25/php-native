<?php 
require 'functions.php';

if ( isset($_POST["submit"]) ) {


    // if(tambah($_POST) > 0){
    //     echo "data berhasil ditambahkan!";
    // } else {
    //     echo "Data gagal ditambahkan!";
    // }

    //use javascript
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('Data Telah Berhasil ditambahkan!');
            document.location.href = 'index2.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'index2.php';
        </script>
        ";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <!-- seolah olah form nya memiliki 2 buah jalur pengelolaan, untuk string akan dikelola oleh $post dan untuk file akan dikelolah $_FILE, lalu syaratnya harus ada enctype-->
    <form action="" method="post" enctype="multipart/form-data"> 
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
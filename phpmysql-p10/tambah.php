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
            alert('Data Telah Berhasil ditambahkan');
            document.location.href = 'index2.php';
        </script>
        ";
    } else {
        echo "data salah";
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

    <form action="" method="post">
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
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
<!-- ketika user langsung membuka, detailmhs maka akan error, karena kita langsung mencetak isi dari variabel superglobal GET (mencetak nama, nim, email). dengan asumsi data nya sudah ada di url, kalau kita tidak mengirim data nya, ya pasti error, karena dia berusaha mencetak sesuatu yang tidak ada-->

<ul>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nim"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<!-- gimana supaya user yang mencoba masuk ke latihan 2 itu tidak boleh ngetik langsung ke url, tapi harus lewat link pertama, anggap saja orang yang ngetik langsung di url itu adalah orang jahat yang mau masuk ke dalam sistem. jadi orang yang datang ke halaman 2 harus bawa data dari latihan 1 -->
<a href="index2.php">Kembali ke menu awal.</a>

</body>
</html>
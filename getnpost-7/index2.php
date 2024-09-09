 <!-- $_GET: metode pengiriman data melalui url dan data tersebut bisa diambil dan ditangkap oleh variabel auperglobal $_GET -->

<?php
$mahasiswa2 = [
    [
        "nama" => "Rifqi Arasy",
        "nim" => 1201230038,
        "email" => "rifqiarasy@telkomuniversity.ac.id",
        "jurusan" => "Software Engineering"
    ],
    [
        "nama" => "Jono",
        "nim" => 1201230001,
        "email" => "Jonoy@telkomuniversity.ac.id",
        "jurusan" => "Teknik Mesin",
        "tugas" => [90, 80, 100]
        ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h3>Daftar Mhs</h3>
<ul>
    <?php foreach ($mahasiswa2 as $mhs) : ?>
        <li>
            <a href="detailmhs.php?nama=<?= $mhs["nama"]; ?>
            &nim=<?= $mhs["nim"]?>
            &email=<?= $mhs["email"]?>
            &jurusan=<?= $mhs["jurusan"]?>"><?= $mhs ["nama"]; ?></a> 
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
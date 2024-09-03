<?php
//  $mahasiswa = ["Arasy", 1201230039, "Software Engineer", "rifqiarasy@telkomuniversity.ac.id"];

//  $mahasiswa2 = [
//     ["Rifqi Reissal Arasy", 1201230038, "Software Engineer", "rifqiarasy@telkomuniversity.ac.id"],
//     ["Jono", 1201230039, "Software Engineer", "rifqiarasy@telkomuniversity.ac.id"]
//  ];

// Array Associative: definisi nya sama seperti array numerik, kecuali key nya adalah String yang kita buat sendiri. 

$mahasiswa1 = [
    "nama" => "Rifqi Arasy",
    "nim" => 1201230038,
    "email" => "rifqiarasy@telkomuniversity.ac.id",
    "jurusan" => "Software Engineering"
    ];

$mahasiswa2 = [
    [
    "nama" => "Rifqi Arasy",
    "nim" => 1201230038,
    "email" => "rifqiarasy@telkomuniversity.ac.id",
    "jurusan" => "Software Engineering"
    ],
    [
        "nama" => "Arasy",
        "nim" => 1201230039,
        "email" => "arasy@telkomuniversity.ac.id",
        "jurusan" => "Software Engineering",
        "tugas" => [90, 80, 100]
        ]
];
 
// Mencetak 1 Array associative
echo $mahasiswa1 ["nama"];

echo "<br>";

// mencetak array di dalam array associative
echo $mahasiswa2 [1]["email"];

echo "<br>";

// mencetak array di dalam array di dalam array associative
echo $mahasiswa2 [1]["tugas"][1];
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <style>
    .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <!-- mencetak 1 array  -->
    <ul>
        <li><?= $mahasiswa[0] ?></li>
        <li><?= $mahasiswa[1] ?></li>
        <li><?= $mahasiswa[2] ?></li>
        <li><?= $mahasiswa[3] ?></li>
    </ul>

    <div class="clear"></div>

    <!-- mencetak array dalam array (keseluruhan data/semua data) yang ada di array -->
    <h2>Daftar Mahasiswa</h2>
    
    <?php foreach ( $mahasiswa2 as $mhs ) : ?>
    <ul>
        <li>Nama: <?= $mhs[0] ?></li>
        <li>NIM: <?= $mhs[1] ?></li>
        <li>jurusan: <?= $mhs[2] ?></li>
        <li>Email: <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>

    <!-- mencetak array dalam array associative (keseluruhan data/semua data) yang ada di array -->
    <h2>Daftar Mahasiswa</h2>
    
    <?php foreach ( $mahasiswa2 as $mhs ) : ?>
    <ul>
         <!-- menambahkan gambar sesuai array/ nomor-->
         <li>
            <img src="img/ <?= $mhs ["gambar"]; ?>">
        </li>
        <li>Nama: <?= $mhs["nama"] ?></li>
        <li>NIM: <?= $mhs["nim"] ?></li>
        <li>jurusan: <?= $mhs["email"] ?></li>
        <li>Email: <?= $mhs["jurusan"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
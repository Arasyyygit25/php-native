<?php 
// Coment

/* 
    coment
*/

// PHP-Native-Syntax

// Standar Ouput:
// echo, print
// print_r (khusus mencetak array, dipakai untuk debugging)
// var_dump ( melihat isi dari variabel, dipakai untuk debugging)

// echo "Ara";
// echo 123;
// echo true;
// echo false;
// print "Ara";
// print_r("Arasy");
// var_dump("Arasy");

//penulisan Sintaks PHP
// 1. php di dalam html
// 2. HTML di dalam PHP

// <!-- Variabel dan tipe data -->
// <!-- Variabel -->
// Variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "rifqi Reissal";
// $nama1 = "Arasy";

// echo "Halo, Nama saya $nama"; //interpolasi: apakah di dalam string ada variabel atau tidak, kalau ada yang ditampilkan brarti isi dari variabel
// echo 'Halo, Nama saya $nama'; //interpolasi tidak jalan 

// Operator
// Aritmatika = + - * / %
// $x = 10;
// $y = 10;

// echo $x + $y;
// echo 1 + 2;

// Penggabung String / concat
// . 
// $first_name = "Rifqi";
// $last_name = "Arasy";

// echo $first_name . " " . $last_name;


// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Rifqii";
// $nama .= " ";
// $nama .= "Arasyy";
// echo $nama;

//Perbandingan 
// <, >, <=, >=, ==, !=

// var_dump(1 > 5);
// var_dump(1 < 5);
// var_dump(1 == 5);
// var_dump(1 == "1");

// // identitas
// //===, !==
// var_dump(1 === "1");

// logika
// &&, ||, !

$x = 30;

var_dump($x < 20 && $x %2 == 0);
var_dump($x < 20 || $x %2 == 0);

?>

<!-- PHP At HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "This is Paragraf"; ?></p>
</body>
</html>

<!-- HTML at PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Di dalam PHP</title>
</head>
<body>
    <?php 
    echo "<h1>Halo, Selamat Datang Arasy<h1>"
    ?>
</body>
</html>





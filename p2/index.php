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
$nama = "Reissal";


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





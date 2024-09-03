<?php
// create Array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [120, "String", true];

// //menampilkan array
// //versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// //menampilkan 1 elemen pada array
// echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .box{
            width: 30px;
            height: 30px;
            background-color: green;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

    <?php 
        $angka = [1,2,3,4,5,6,7,8,9];
        $angka2 = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];
    ?>
    <!-- mencetak 1 array di dalam 3 array -->
    <div class="box"><?= $angka2[1][1] ?></div>

    <div class="clear"></div>
    
    <!-- mencetak array di dalam array -->
    <?php foreach ( $angka2 as $a2 ) : ?>
        <?php foreach ($a2 as $a3) : ?>
        <div class = "box"><?= $a3; ?></div>
        <?php endforeach; ?>
        <!-- Mencetak 3 baris kebawah -->
        <div class="clear"></div>
    <?php endforeach; ?>

    <div class="clear"></div>

    <!-- mencetak 1 array use foreach -->
    <?php foreach ( $angka as $a ) : ?>
        <div class = "box"><?= $a; ?></div>
    <?php endforeach; ?>

</body>
</html>
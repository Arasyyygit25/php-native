<?php
// pengulangan pada array
// for / foreach

$angka = [2,3,4,5,100,6,90,50,70];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index 2</title>
    <style>
        .box {
            width: 50px;
            height: 50px;    
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>  
</head>

<body>
    <!-- For -->
    <?php for($i = 0; $i < count($angka); $i++ ) { ?>
    <div class = "box"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Foreach -->
    <?php foreach( $angka as $a ) { ?>
        <div class = "box"><?php echo $a?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a ) : ?>
        <div class = "box"><?= $a?></div>
    <?php endforeach ; ?>
</body>
</html>
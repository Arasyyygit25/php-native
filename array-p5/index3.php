<!-- Array Numeric -->

<?php 
$mahasiswa = [
    ["Rifqi Reissal Arasy", 1201230038, "Software Engineer", "rifqiarasy@telkomuniversity.ac.id"],
    ["Rifqi Reissal Arasy", 1201230039, "Software Engineer", "rifqiarasy@telkomuniversity.ac.id"],
    ["Rifqi Reissal Arasy", 1201230040, "Software Engineer", "rifqiarasy@telkomuniversity.ac.id"]
];
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
    <h1>Daftar Mahasiswa</h1>

<ul>
    <?php foreach ($mahasiswa as $mhs ) : ?>
        <li><?php echo $mhs; ?></li>
    <?php endforeach; ?>
</ul>

<div class="clear"></div>

<ul>
    <li><?=  $mahasiswa[0]; ?></li>
    <li><?=  $mahasiswa[1]; ?></li>
    <li><?=  $mahasiswa[2]; ?></li>
    <li><?=  $mahasiswa[3]; ?></li>
</ul>

<div class="clear"></div>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama: <?=  $mhs[0]; ?></li>
    <li>Nim: <?=  $mhs[1]; ?></li>
    <li>Jurusan: <?=  $mhs[2]; ?></li>
    <li>Gmail: <?=  $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
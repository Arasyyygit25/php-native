<!-- user-defined function -->

<?php 
function salam($waktu = "Datang", $nama  = "User") {
    return "Selamat $waktu, $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1><?= salam("Siang", "Arasy"); ?></h1>
</body>
</html>
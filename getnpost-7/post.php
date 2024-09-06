<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index3.php" method="post">
        Masukkan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    
    <!-- <form action="index3.php" method="get">
        Masukkan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form> -->
    <!-- sekarang datanya tidak dikirim di belakang layar, namun lewat url -->
    <!-- post tidak ada di url, get ada di url -->

    <!-- error jika data belum dikirim -->
    <h1>Hi, Welcome <?= $_POST["nama"]?></h1>

     <!-- solusi, menggunakan if, jika submit belum ditekan maka jangan di tampilkan  -->
    <?php if( isset($_POST["submit"]) ) : ?>
     <h1>Hi, Welcome <?= $_POST["nama"]?></h1>
    <?php endif; ?>

    <!-- action bisa di kosongkan, jika kosong maka data akan dikirim ke halaman ini, jika method di kosongkan maka defaultnya akan get-->
    <form action="" method="post">
        Masukkan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>
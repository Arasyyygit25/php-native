<?php
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ){

// cek username & password
    if( $_POST["username"] == "admin" && ["password"] == "123") {

// jika benar, redirect ke halaman admin
    header("Location: admin.php");
    
    //jika salah, tampilkan pesan kesalahan
    } else {
        $error= true;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<h1>Login Admin</h1>

<ul>
<form action="" method="post">
    <li>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
    </li>

    <!-- ketika username dan password salah -->
    <?php if ( isset ($error)) :?>
    <p style= "color: red; font-style: italic;">Username / password salah!</p>
    <?php endif; ?>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>

</body>
</html>
<?php
// cek apakah tombol submit sudah tekan atau belum

// cek username & password

// jika benar, redirect ke halaman admin

//jika salah, tampilkan pesan kesalahan
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
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>

</body>
</html>
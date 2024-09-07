<?php
// cek apakah tombol submit sudah tekan atau belum
// if( isset($_POST["submit"]) ){

// // cek username & password
//     if( $_POST["username"] == "admin" && $_POST["password"] == "123") {

// // jika benar, redirect ke halaman admin
//     header("Location: admin.php");
//     exit;

//     } else {
//         //jika salah, tampilkan pesan kesalahan
//         $error= true;
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        
       body{
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        justify-content: center;
        padding: 0;
        margin: 0;
        align-items: center;
        height: 100vh;
        display: flex;
       }

       #form{
        background-color: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
       }

       h1{
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
        }

        label{
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button{
            width: 100%;
            padding: 10px;
            background-color: #4CAE30;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }

        p {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    
    <div id="form">
        <h1>Login Admin</h1>

        <form action="admin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <!-- ketika username dan password salah -->
            <?php if ( isset ($error) ) : ?>
            <p>Username / password salah!</p>
            <?php endif; ?>
            
            <button type="submit" name="submit">Login</button>
        </form>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<?php if( isset($_POST["submit"]) ) : ?>
    <h2>Welcome Admin, <?= $_POST["username"]; ?>!</h2>
<?php endif; ?>


<a href="login.php">Logout</a>

</body>
</html>
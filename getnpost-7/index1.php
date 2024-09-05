<?php 
// variabel scope / lingkup variabel

// $x = 10; //variabel local untuk halaman 

// function  tampilX(){
//     global $x; //mencari variabel local diluar function
//     $x = 20; //variabel local untuk function saja
//     echo $x;
// }

// tampilX();
// echo $x


// superglobals
// variable global milik php, merupakan array associative

var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";
var_dump($_REQUEST);
echo "<br>";
var_dump($_SESSION);
echo "<br>";
var_dump($_COOKIE);
echo "<br>";
var_dump($_SERVER);
echo "<br>";
var_dump($_ENV);

?>
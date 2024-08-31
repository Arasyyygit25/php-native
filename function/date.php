<?php 
//date: menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    //time
    // unix timestamp / epoch time
//    echo time();
// echo date("d M Y", time() - 60  * 60 * 24 * 1000);

//mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,25,12,2004));

//strtotime
// echo date("l", strtotime("25 aug 1985"));

//string

//strlen(): menghitung panjang sebuah string/ lenght dari sebuah string
//strcmp(): membandingkan 2 buah string
//explode(): memecah sebuah string menjadi array ( digunakan untuk mengambil nama sebuah file)
//htmlspecialchars(): menjaga website dari orang iseng 

//utility

//isset(): mengecek sebuah variabel apakah sudah pernah bikin variabel atau belum, menghasilkan true atau false
//var_dump(): mencetak isi dari sebuah variabel array, objek
//empty(); apakah variabel yang ada, ada isinya atau kosong
//die(): mengentikan program kita, yang dimana di baris program kita ketemu die maka baris bawahnya tidak di eksekusi
//sleep(): untuk memberhentikan sementara program nya
?>
<?php
    // pengkondisian / percabangan: if else, if., else if., else, ternary(operator, if else sederhana), switch
    
    $x = 10;
    if ( $x < 20 ) {
        echo "Benar <br>";
    }
    // echo "Salah";


    $u = 20;
    if ( $u < 20 ) {
        echo " Benar!  <br> ";
    } else {
        echo " Salah!  <br> ";
    }

    $u = 20;
    if ( $u < 20 ) {
        echo " Benar!  <br> ";
    } else if ( $u == 20) {
        echo " Perfect!  <br> ";
    } else {
        echo " Salah  <br> ";
    }
?>
<?php
    $x = 110;
    $y = 2;
    $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    // $z = $x % $y;

    $z = $x ** $y;
    echo $z;
    if (is_int(1)){
        echo("\né numero");
    }
    else{
        echo "\nNao e numero";
    }
    if (is_string("fe")) {
        echo "\né uma string";
    }
    else{
        echo "\nnao e uma string";
    }
?>
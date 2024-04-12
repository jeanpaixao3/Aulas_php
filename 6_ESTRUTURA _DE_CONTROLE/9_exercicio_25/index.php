<?php

// IF aninhado

    $a = 12;
    $b = 88;
    $c = "teste";

    if(is_int($a) || is_float($a)) {
      
        $mult1 = $a * 2;

        if($mult1 > 100) {
            echo "O numero é maior que 100 <br>";
        } else {
            echo " o numero é menor que 100 <br>";
        }
    } else {
        echo "Não é um numero <br>";
    }

    if(is_int($b) || is_float($b)) {
      
        $multi1 = $b * 2;

        if($multi1 > 100) {
            echo "O numero é maior que 100 <br>";
        } else {
            echo " o numero é menor que 100 <br>";
        }
    } else {
        echo "Não é um numero <br>";
    }

    if(is_int($c) || is_float($c)) {
      
        $mul1 = $c * 2;

        if($mul1 > 100) {
            echo "O numero é maior que 100 <br>";
        } else {
            echo " o numero é menor que 100";
        }
    } else {
        echo "Não é um numero <br>";
    }
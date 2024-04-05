<?php

if(is_int(5)) {
    echo "è um inteiro 1 <br>";
}

if(is_int("não é um inteiro")) {
    echo "è um inteiro 2 <br>";
}

$a = 10;
if(is_int($a)) {
    echo "è um inteiro 3 <br>";
}
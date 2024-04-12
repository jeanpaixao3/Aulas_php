<?php


if(3 !== 3) {
    echo ("Comparação verdadeira 1 <br>");
}

if(3 !== "4") {
    echo("Comparação verdadeira 2<br>");
}

$a = 12;
$b = 12;
$c = "12";

if($a !== $b) {
    echo ("comparação verdadeira 3<br>");
}

if($a !== $c) {
    echo ("comparação verdadeira 4 <br>");
}



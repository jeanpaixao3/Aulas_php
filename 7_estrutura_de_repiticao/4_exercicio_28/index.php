<?php

    $x = 4;

    while($x < 30) {

        echo "O X é $x <br>";

        if($x === 24) {
            echo "Terminando o loop <br>";
            break;
        }

        $x = $x + 2;
    }
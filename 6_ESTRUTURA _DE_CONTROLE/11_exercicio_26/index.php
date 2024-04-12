<?php

    $velocidade = 45;
    $velocidadePermitida = 40;

    if($velocidade < $velocidadePermitida) {
        echo "Velocidade correta <br>";
    } else if ($velocidade == $velocidadePermitida) {
        echo "Tenha cuidado  <br>";
    } else 
        echo "Você foi multado";
    
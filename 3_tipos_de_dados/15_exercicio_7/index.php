<?php

    $pessoa = ['nome' => 'Jean', 'idade' => 41, 'cor' => "Negra"];
    echo $pessoa['nome'];
    echo "<br>";
    print_r($pessoa);
    echo "<br>";

    echo $pessoa["idade"];
    echo "<br>";

    $maioridade = 18;

    if($pessoa['idade'] >= $maioridade) {
        echo " é maior de idade.";
    }
    echo "<br>";


    if($pessoa['idade'] <= $maioridade) {
        echo " é menor de idade.";
    }





<?php

    class Pessoa {

        function falar() {
            echo "Olá pessoal";

        }
        

    }

    $jean = new Pessoa();

    $jean->nome = "jean";

    echo $jean->nome;

    echo "<br>";

    $jean->falar();
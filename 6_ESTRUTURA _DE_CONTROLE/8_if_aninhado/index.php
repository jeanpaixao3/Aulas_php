<?php

    if(10 > 2) {
        echo "Entro no primeiro if <br>";

        if("teste" == "teste") {
            echo "entrou no segundo if<br>";
        }
    }

    if(10 > 2) {
        echo "Entro no primeiro if <br>";

        if("teste" != "teste") {
            echo "entrou no segundo if<br>";
        } else {
            echo "entrou no primeiro else";
        }
    }
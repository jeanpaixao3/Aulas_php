<?php
    $host = "localhost";
    $user = "jean";
    $pass = "123456";
    $db = "cursophp";
    
    $conn = new mysqli($host, $user, $pass, $db);

    //assunto da aula
    $table = "pessoas";
    $idade = 41;
    $nome = "Jean";

    $q = "INSERT INTO $table (idade, nome) VALUES ('$idade', '$nome')";
    $conn->query($q);
    $conn->close();
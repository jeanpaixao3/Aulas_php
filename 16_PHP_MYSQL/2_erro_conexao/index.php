<?php
    $host = "localhost";
    $user = "jean";
    $pass = "123456";
    $db = "cursophp";
    
    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_errno) {
        echo "Erro na conexão! <br>";
        echo "Erro: " . $conn->connect_error;
    }
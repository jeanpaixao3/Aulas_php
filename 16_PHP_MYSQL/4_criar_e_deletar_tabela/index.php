<?php
    $host = "localhost";
    $user = "jean";
    $pass = "123456";
    $db = "cursophp";
    
    $conn = new mysqli($host, $user, $pass, $db);

    //assunto da aula
  //  $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100)) ";
  $q = "DROP TABLE teste";

    $conn->query($q);
    $conn->close();
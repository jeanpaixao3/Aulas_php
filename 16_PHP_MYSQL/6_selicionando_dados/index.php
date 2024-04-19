<?php
    $host = "localhost";
    $user = "jean";
    $pass = "123456";
    $db = "cursophp";
    
    $conn = new mysqli($host, $user, $pass, $db);

    //ASSUNTO DA AULA
    $q = "SELECT * FROM carros";

    $result = $conn->query($q);

    $conn->close();

    //UM RESULTADO
   // $item = $result->fetch_assoc();

    //TODOS OS RESULTADOS
    $itens = $result->fetch_all();

    print_r($itens);



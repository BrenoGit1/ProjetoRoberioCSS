<?php

    $host = "localhost";
    $user = "root";
    $pass = "aluno.ifal";
    $dbname = "bancocelke";


        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
?>
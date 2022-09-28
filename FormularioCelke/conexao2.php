<?php

    $usuario = 'root';
    $senha = 'aluno.ifal';
    $database = 'bancoCelke';
    $host = 'localhost';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error) {
        die("Falha ao concetar ao banco de dados" . $mysqli->error);
    }

?>
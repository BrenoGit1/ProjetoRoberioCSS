<?php

    if(!isset($_SESSION)) {
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
    <h1>Gestão e Qualidade de Software</h1>
    <header class="cadastro">
        <h3><a href="http://localhost/Formulariocelke/index.php" class="link">Cadastrar Novos Clientes</a></h3>
    </header>
    <header class="cadastro">
        <h3><a href="http://localhost/Formulariocelke/lista.php" class="link">Gerenciar Clientes</a></h3>
    </header>
    
</body>
</html>
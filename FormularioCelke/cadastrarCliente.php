<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke - Cadastrar em Duas Tabelas</title>
    <link href="css/form.css" rel="stylesheet">
</head>
<body>
    <h1><a href="http://localhost/Formulariocelke/inicio.php" class="link"><</a></h1>
    <h1>Cadastrar um usuario</h1>

    <?php
    
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <form method="POST" action="processa.php">
        <h3>Dados Básicos</h3>
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome"><br></br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="E-mail"><br></br>

        <label>Data de Nascimento: </label>
        <input type="date" name="dataNascimento" id="dataNascimento" placeholder="Data de Nascimento"><br></br>
        
        <label>Endereço: </label>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço"><br></br>

        <label>Estado: </label>
        <input type="text" name="estado" id="estado" placeholder="Estado"><br></br>
        
        <label>Cidade: </label>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade"><br></br>
        
        <label>Bairro: </label>
        <input type="text" name="bairro" id="bairro" placeholder="Bairro"><br></br>

        <input type="submit" value="cadastrar" name="cadastrarCliente">
    </form>
    
</body>
</html>
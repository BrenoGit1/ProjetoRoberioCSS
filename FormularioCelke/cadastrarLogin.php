<?php

    session_start();

    ob_start();

    //include_once "conexao.php";

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['cadastrar'])){
        $query_usuario = "INSERT INTO cadastrarusuario (id, email, senha) VALUES (:id, :email, :senha)";
        $cad_usuario = $conn->prepare($query_usuario);
        $cad_usuario->bindParam(':id', $id, PDO::PARAM_INT);
        $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
        $cad_usuario->execute();
        $id = $conn->lastInsertId();
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
        <link href="css/cadastro.css" rel="stylesheet">
    </head>
    <body>
        <div class="form_cd">
            <h2>Cadastrar login</h2>
            <form method="post">
                <div><input type="text" name="email" placeholder="E-mail"></div>
                <div><input type="password" name="senha" placeholder="Senha"></div>
                <div><input type="submit" name="cadastrar" value="Cadastrar"></div>
            </form>
        </div>
    </body>
</html>
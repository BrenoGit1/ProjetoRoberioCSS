<?php

    session_start();//Iniciar sessão

    //Limpar o buffer de saida
    ob_start();

    //Incluir a conexao com o bd
    include_once "conexao.php";

    //Receber os dados do formulario
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //var_dump($dados);

    //Verificar se o usuario  clicou no botao
    if(!empty($dados['cadastrarCliente'])){
        $query_usuario = "INSERT INTO formulario (id, nome, email, dataNascimento, endereco, estado, cidade, bairro) VALUES (:id, :nome, :email, :dataNascimento, :endereco, :estado, :cidade, :bairro)";
        $cad_usuario = $conn->prepare($query_usuario);
        $cad_usuario->bindParam(':id', $id, PDO::PARAM_INT);
        $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':dataNascimento', $dados['dataNascimento'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':endereco', $dados['endereco'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
        $cad_usuario->execute();
        //var_dump($conn->lastInsertId());
        //Recuperar o ultimo id incluido
        $id = $conn->lastInsertId();

        $_SESSION['msg'] = "<p style='color: green;'>Cliente Cadastrado com sucesso!</p>";

        //Redirecionar o usuário
        header("Location:index.php");
    }else{
        $_SESSION['msg'] = "<p style='color: red;'>Erro: Cliente não foi cadastrado</p>";
    }
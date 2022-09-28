<?php

    session_start();

    include_once "conexao.php"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Clientes</title>
    <link href="css/form.css" rel="stylesheet">
</head>
<body>
    <h1><a href="http://localhost/Formulariocelke/inicio.php" class="link"><</a></h1>
    <h1>Clientes</h1> 
    
    <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        $query_usuarios = "SELECT nome, email, dataNascimento, endereco, estado, cidade, bairro FROM formulario ORDER BY id DESC";
        $result_usuarios = $conn->prepare($query_usuarios);
        $result_usuarios->execute();

        while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
            //var_dump($row_usuario);
            extract($row_usuario);
            echo "Nome do cliente: $nome <br>";
            echo "E-mail do cliente: $email <br>";
            echo "Data de nascimento do cliente: $dataNascimento <br>";
            echo "Endereço do cliente: $endereco <br>";
            echo "Estado do cliente: $estado <br>";
            echo "Cidade do cliente: $cidade <br>";
            echo "Bairro do cliente: $bairro <br>";
            echo "<hr>";
        }
    ?>
    
</body>
</html>
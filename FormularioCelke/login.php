<?php
 //include ('cadastrarlogin.php');

    if(isset($_POST['email']) && isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu email";
        }else if (strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM cadastrarusuario WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                //$_SESSION['email'] = $usuario['email'];

                header("Location: inicio.php");

            }else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body>
        <div class="form_cd">
            <h2>Login</h2>
            <form action="" method="post">
                <div><input type="text" name="email" placeholder="Email"></div>
                <div><input type="password" name="senha" placeholder="Senha"></div>
                <div><input type="submit" name="cadastrar" value="Entrar"></div>
            </form>
            <p>Esqueceu a <a href="http://localhost/FormularioCelke/recuperarSenha.php">senha?</a></p>
            <p>Não tem uma conta? <a href="http://localhost/FormularioCelke/cadastrarLogin.php">cadastre-se.</a></p>
        </div>
    </body>
</html>
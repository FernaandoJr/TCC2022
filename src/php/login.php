<?php
session_start();
require_once 'init.php';


$email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : null);
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
 
    if($email != null and $senha != null){
        $PDO = db_connect();
        $sql = $PDO->query("SELECT email, senha FROM cadastro WHERE email = $email and senha = md5($senha)");
        if($sql->rowCount() == 1){
            $usuario = $sql->fetchAll(PDO::FETCH_ASSOC);
            if (!isset($_SESSION)) {
                session_start();
            }
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];

        header("Location: /src/php/painel.php");

    } elseif($senha == null){
            echo "Por favor, insira sua senha.";
        } elseif($email == null){
            echo "Por favor, insira seu email.";
        }else{
            echo "Email ou Senha incorretos.";
        }


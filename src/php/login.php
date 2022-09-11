<?php
session_start();
require_once 'init.php';

$email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : null);
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
 
    if($email != null and $senha != null){
        // Prepare uma declaração selecionada
        $PDO = db_connect();
        $sql = "SELECT email, senha FROM cadastro WHERE email = :email and senha = :senha";
   
    } else{
        if($senha == null){
            echo "Por favor, insira sua senha.";
        } else{
            echo "Por favor, insira seu email.";
        }
    }
?>

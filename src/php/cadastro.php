<?php
require_once 'init.php';

// pega os dados do formuário
$email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : null);
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO cadastro(email, senha)VALUES(:email, md5(:senha))";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);

if (strlen(trim( $senha )) >= 8 and (filter_var($email, FILTER_VALIDATE_EMAIL))){
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    if ($stmt->execute()) {
        header('Location: /src/index.php');
    } else {
        echo "Erro ao cadastrar";
        print_r($stmt->errorInfo());
    }
} else {
    if (strlen(trim( $senha )) < 8){
        echo "A senha deve conter 8 ou mais caracteres";
    } else{
        echo "O email não é válido";
    }
} 



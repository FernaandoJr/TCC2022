<?php
require_once 'init.php';
session_start();
// pega os dados do formuário
$email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : null);
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$confirm_senha = isset($_POST['confirm_senha']) ? $_POST['confirm_senha'] : null;

$checkemailexists = 0;

// insere no banco
$PDO = db_connect();

$sql = "SELECT email FROM cadastro WHERE email = :email";
$stmt = $PDO->prepare($sql);
$stmt->execute(array(':email' => $email));

if($stmt->rowCount() >= 1){
    $checkemailexists += 1;
}else{
    $checkemailexists == null;
}


if (strlen(trim( $senha )) >= 8 and (filter_var($email, FILTER_VALIDATE_EMAIL)) and ($senha == $confirm_senha) and ($checkemailexists == 0)){
    $sql = "INSERT INTO cadastro(email, senha)VALUES(:email, md5(:senha))";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    if ($stmt->execute()) {
        header('Location: /src/index.php');
    } else {
        $general_err = "Erro ao cadastrar.";
        print_r($stmt->errorInfo());
    }
} elseif(strlen(trim( $senha )) < 8){
        $_SESSION['error_senha'] = true;
        header('Location: /src/cadastro.php');
        exit();
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error_email'] = true;
        header('Location: /src/cadastro.php');
        exit();
    }elseif($senha != $confirm_senha){
        $_SESSION['error_confirm_senha'] = true;
        header('Location: /src/cadastro.php');
        exit();
    }else{
        $_SESSION['error_email_exists'] = true;
        header('Location: /src/cadastro.php');
        exit();
    }

?>

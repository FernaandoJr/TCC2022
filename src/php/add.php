<?php
require_once 'init.php';

// pega os dados do formuário
$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = htmlspecialchars(isset($_POST['nome']) ? $_POST['nome'] : null);
$tel = htmlspecialchars(isset($_POST['tel']) ? $_POST['tel'] : null);
$email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : null);
$msg = htmlspecialchars(isset($_POST['msg']) ? $_POST['msg'] : null);


// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO cadastro(nome, tel, email, msg) VALUES(:nome, :tel, :email, :msg)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':tel', $tel);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':msg', $msg);

if ($stmt->execute()) {
    header('Location: /src/index.php');
} else {
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
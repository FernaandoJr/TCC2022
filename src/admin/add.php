<?php
require_once 'init.php';
$link = isset($_POST['link']) ? $_POST['link'] : null;
$tipo = htmlspecialchars(isset($_POST['tipo']) ? $_POST['tipo'] : null);

$PDO = db_connect();
$sql = "INSERT INTO img(link, tipo) VALUES(:link, :tipo)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':link', $link);
$stmt->bindParam(':tipo', $tipo);
if ($stmt->execute()) {
    header('Location: projetos.php');
} else {
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
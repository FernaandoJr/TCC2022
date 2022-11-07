<?php
require_once 'init.php';
// pega o ID da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

$PDO = db_connect();
$sql = "DELETE FROM resposta_form WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute()) {
    header('Location: pedidos.php');
} 
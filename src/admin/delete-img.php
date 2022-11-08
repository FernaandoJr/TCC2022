<?php
require_once 'init.php';
// pega o ID da URL

if (isset($_POST['delImg'])) {
    $all_id = $_POST['delete-id'];
    $extract_id = implode(',' , $all_id);

$sql = "delete from img where id in($extract_id)";
$sql_run = mysqli_query($conexao, $sql);

if ($sql_run) {
    header('Location: projetos.php');
}

}



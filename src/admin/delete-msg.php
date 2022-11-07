<?php
require_once 'init.php';
// pega o ID da URL

if (isset($_POST['delMsg'])) {
    $all_id = $_POST['delete-id'];
    $extract_id = implode(',' , $all_id);
    echo $extract_id;
}

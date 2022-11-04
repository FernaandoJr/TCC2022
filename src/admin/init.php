<?php

// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'db');

$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die ('Não foi possivel conectar');

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

// inclui o arquivo de funçõees
require_once 'functions.php';

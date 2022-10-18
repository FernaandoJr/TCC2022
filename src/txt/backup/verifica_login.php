<?php
session_start();
if(!$_SESSION['email']){
    header('Location: /src/index.php');
    exit();
}
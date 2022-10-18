<?php
session_start();
session_destroy();
header('Location: /src/index.php');
exit();
<?php

session_start();

require_once 'controllers/LoginController.php';

$controller = new LoginController();
$controller->login();

if (isset($_SESSION['usuario'])) {
    header("Location: pages/principal.php");
    exit;
}

require_once 'pages/login.php';

?>
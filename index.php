<?php

session_start();

require_once
'controllers/LoginController.php';

$controller =
new LoginController();

$controller->login();

if(isset($_SESSION['usuario'])){
    require_once './pages/principal.php';
}else{
    require_once './pages/login.php';
}
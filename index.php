<?php

session_start();

if(isset($_SESSION['usuario'])){
    require_once './pages/principal.php';
}else{
    require_once './pages/login.php';
}
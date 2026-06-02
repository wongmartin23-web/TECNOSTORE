<?php

session_start();

if (
    !isset($_SESSION['usuario']) ||
    empty($_SESSION['usuario']['id_usuario'])
) {

    session_destroy();

    header("Location: ../index.php");

    exit;
}
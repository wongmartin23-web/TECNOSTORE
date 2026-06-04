<?php

session_start();

if (!isset($_SESSION['usuario'])) {

    header("Location: ../../index.php");

    exit;
}

if (
    $_SESSION['usuario']['rol']
    !== 'Administrador'
) {

    header(
        "Location: ../principal.php"
    );

    exit;
}
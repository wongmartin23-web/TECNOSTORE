<?php

session_start();

/* Vaciar variables */
$_SESSION = [];

/* Eliminar cookie de sesión */
if (ini_get("session.use_cookies")) {

    $params = session_get_cookie_params();

    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

/* Destruir sesión */
session_destroy();

/* Regenerar id */
session_regenerate_id(true);

header("Location: index.php");
exit;
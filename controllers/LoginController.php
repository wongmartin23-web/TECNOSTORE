<?php

require_once __DIR__ . '/../models/Usuario.php';

class LoginController
{
    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $correo = trim($_POST['correo']);
        $password = $_POST['password'];

        $usuario = new Usuario();

        $datos = $usuario->obtenerPorCorreo($correo);

        if (!$datos) {

            $_SESSION['error'] =
                "Usuario no encontrado";

            return;
        }

        if (
            password_verify(
                $password,
                $datos['contrasena']
            )
        ) {

            $_SESSION['usuario'] = $datos;

            header(
                "Location: pages/principal.php"
            );

            exit;
        }

        $_SESSION['error'] =
            "Contraseña incorrecta";
    }
}
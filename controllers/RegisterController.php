<?php

require_once __DIR__ . '/../models/Usuario.php';

class RegisterController
{
    public function registrar()
    {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellidos']);
        $correo = trim($_POST['correo']);
        $password = $_POST['password'];
        $confirmar = $_POST['confirmar'];

        if ($password !== $confirmar) {

            $_SESSION['error'] =
                "Las contraseñas no coinciden";

            return;
        }

        $usuario = new Usuario();

        $existe =
            $usuario->obtenerPorCorreo($correo);

        if ($existe) {

            $_SESSION['error'] =
                "El correo ya existe";

            return;
        }
        if (
            empty($nombre) ||
            empty($apellido) ||
            empty($correo) ||
            empty($password)
        ) {
            $_SESSION['error'] =
                "Complete todos los campos";
            return;
        }
        $usuario->registrar(
            $nombre,
            $apellido,
            $correo,
            $password
        );

        $_SESSION['success'] =
            "Cuenta creada correctamente";

        header("Location: ../index.php");
        exit;
    }
}

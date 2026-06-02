<?php

session_start();

require_once
'../controllers/RegisterController.php';

$controller =
new RegisterController();

$controller->registrar();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Cuenta | TECNOSTORE</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/register.css">
</head>

<body>

    <div class="register-container">

        <div class="register-card">

            <!-- LOGO -->

            <div class="register-header">

                <h1 class="register-logo">
                    TECNO<span>STORE</span>
                </h1>

                <p class="register-subtitle">
                    Tecnología rápida, segura y al mejor precio
                </p>

            </div>

            <!-- TITULO -->

            <div class="register-title">

                <h2>Crear Cuenta</h2>

                <p>
                    Completa tus datos para registrarte
                </p>

            </div>

            <!-- FORMULARIO -->

            <form method="POST">

                <div class="form-group">

                    <label>Nombre</label>

                    <div class="input-group">

                        <img src="./assets/img/user.png" alt="">

                        <input
                            type="text"
                            name="nombre"
                            placeholder="Ingresa tu nombre">

                    </div>

                </div>

                <div class="form-group">

                    <label>Apellidos</label>

                    <div class="input-group">

                        <img src="./assets/img/user.png" alt="">

                        <input
                            type="text"
                            name="apellidos"
                            placeholder="Ingresa tus apellidos">

                    </div>

                </div>

                <div class="form-group">

                    <label>Correo electrónico</label>

                    <div class="input-group">

                        <img src="./assets/img/correo.png" alt="">

                        <input
                            type="email"
                            name="correo"
                            placeholder="ejemplo@correo.com">

                    </div>

                </div>

                <div class="form-group">

                    <label>Contraseña</label>

                    <div class="input-group">

                        <img src="./assets/img/candado.png" alt="">

                        <input
                            type="password"
                            name="password"
                            placeholder="Crea una contraseña">

                    </div>

                </div>

                <div class="form-group">

                    <label>Confirmar contraseña</label>

                    <div class="input-group">

                        <img src="./assets/img/candado.png" alt="">

                        <input
                            type="password"
                            name="confirmar"
                            placeholder="Confirma tu contraseña">

                    </div>

                </div>

                <button
                    type="submit"
                    class="btn-register">
                    Crear cuenta
                </button>

            </form>

            <div class="back-login">

                <a href="index.php">

                    ← Volver al inicio de sesión

                </a>

            </div>

        </div>

    </div>

</body>

</html>
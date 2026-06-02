<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_SESSION['usuario'] = 'cliente';

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECNOSTORE | Login</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>

    <div class="login-container">

        <!-- PANEL IZQUIERDO -->

        <section class="left-panel">

            <div class="logo">
                TECNO <span>STORE</span>
            </div>

            <p class="subtitle">
                Tecnología rápida, segura y al mejor precio
            </p>

            <h1>
                Los mejores
                <span>smartphones</span>
                están aquí
            </h1>

            <p class="description">
                Inicia sesión para acceder a las mejores ofertas en celulares y accesorios.
            </p>

            <div class="features">

                <div class="feature">
                    <img src="./assets/img/seguridad.png" alt="">
                    <span>Compra segura</span>
                </div>

                <div class="feature">
                    <img src="./assets/img/Frame-4.png" alt="">
                    <span>Soporte 24/7</span>
                </div>

                <div class="feature">
                    <img src="./assets/img/reloj.png" alt="">
                    <span>Garantía oficial</span>
                </div>

            </div>

            <div class="phones">
                <img src="./assets/img/telefonos-2.png" alt="">
            </div>

        </section>

        <!-- PANEL DERECHO -->

        <section class="right-panel">

            <div class="help">
                ⓘ ¿Necesitas ayuda?
            </div>

            <div class="form-wrapper">

                <h2>Iniciar Sesión</h2>

                <p class="welcome">
                    Bienvenido de nuevo a TecnoStore
                </p>

                <form method="POST" action="index.php">

                    <label>Correo electrónico</label>

                    <div class="input-group">
                        <img src="./assets/img/correo.png">
                        <input type="email" placeholder="ejemplo@correo.com">
                    </div>

                    <label>Contraseña</label>

                    <div class="input-group">
                        <img src="./assets/img/candado.png">

                        <input type="password" id="password" placeholder="********">

                        <img src="./assets/img/ojo_cerrado.png"
                            class="eye"
                            id="togglePassword">
                    </div>

                    <div class="options">

                        <label class="remember">
                            <input type="checkbox">
                            Recordarme
                        </label>

                        <a href="#">
                            ¿Olvidaste tu contraseña?
                        </a>

                    </div>

                    <button type="submit" class="btn-login">
                        Iniciar Sesión
                    </button>

                </form>

                <div class="divider">
                    <span>o continúa con</span>
                </div>

                <button class="social-btn">

                    <img src="./assets/img/google_2.png">

                    Continuar con Google

                </button>

                <button class="social-btn">

                    <img src="./assets/img/fb_1.png">

                    Continuar con Facebook

                </button>

                <div class="register">
                    ¿No tienes cuenta?
                    <a href="#">
                        Crear cuenta
                    </a>
                </div>

            </div>

            <div class="footer-links">

                <span>© 2025 TECNOSTORE. Todos los derechos reservados.</span>

                <div>
                    <a href="#">Términos y condiciones</a>
                    <a href="#">Política de privacidad</a>
                </div>

            </div>

        </section>

    </div>

    <script src="./assets/js/login.js"></script>

</body>

</html>
<?php

if (!isset($pagina_actual)) {
    $pagina_actual = '';
}

?>

<header class="header">

    <div class="topbar">

        <div class="header-logo">
            TECNOSTORE
        </div>

        <div class="search">

            <input type="text" placeholder="Buscar productos...">

            <button>
                🔍
            </button>

        </div>

        <div class="icons">

            <a href="#">♡</a>

            <a href="#">
                🛒
                <span class="badge">2</span>
            </a>

            <?php if (isset($_SESSION['usuario'])): ?>

                <span class="user-name">
                    <?= $_SESSION['usuario']['nombre']; ?>
                </span>

                <?php
                if (
                    isset($_SESSION['usuario']['rol']) &&
                    $_SESSION['usuario']['rol'] === 'Administrador'
                ):
                ?>

                    <a
                        href="../pages/admin/dashboard.php"
                        class="admin-btn">
                        Dashboard
                    </a>

                <?php endif; ?>

                <a
                    href="../logout.php"
                    class="logout-btn">
                    Salir
                </a>

            <?php endif; ?>

        </div>

    </div>

    <nav class="navbar">

        <a href="<?= $base_url ?>index.php"
            class="<?= $pagina_actual == 'inicio' ? 'active' : '' ?>">
            Inicio
        </a>

        <a href="#"
            class="<?= $pagina_actual == 'celulares' ? 'active' : '' ?>">
            Celulares
        </a>

        <a href="#"
            class="<?= $pagina_actual == 'ofertas' ? 'active' : '' ?>">
            Ofertas
        </a>

        <a href="#"
            class="<?= $pagina_actual == 'accesorios' ? 'active' : '' ?>">
            Accesorios
        </a>

        <a href="#"
            class="<?= $pagina_actual == 'contacto' ? 'active' : '' ?>">
            Contacto
        </a>

    </nav>

</header>
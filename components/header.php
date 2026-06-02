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

            <a href="#">👤</a>

        </div>

    </div>

    <nav class="navbar">

        <a href="index.php"
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
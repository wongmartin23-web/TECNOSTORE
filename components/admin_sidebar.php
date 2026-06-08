<?php

if (!isset($pagina_actual)) {
    $pagina_actual = '';
}

?>

<div class="admin-sidebar">

    <div class="admin-logo">

        <div class="logo-title">
            TECNOSTORE
        </div>

        <div class="logo-subtitle">
            ADMIN
        </div>

    </div>

    <nav class="admin-menu">

        <a
            class="<?= $pagina_actual == 'dashboard' ? 'active' : '' ?>"
            href="../admin/dashboard.php">

            <span class="menu-icon">⌂</span>
            Dashboard

        </a>

        <a
            class="<?= $pagina_actual == 'productos' ? 'active' : '' ?>"
            href="../admin/productos.php">

            <span class="menu-icon">📦</span>
            Productos

        </a>

        <a
            class="<?= $pagina_actual == 'categorias' ? 'active' : '' ?>"
            href="../admin/categorias.php">

            <span class="menu-icon">⊞</span>
            Categorías

        </a>

        <a
            class="<?= $pagina_actual == 'pedidos' ? 'active' : '' ?>"
            href="../admin/pedidos.php">

            <span class="menu-icon">📝</span>
            Pedidos

        </a>

        <a
            class="<?= $pagina_actual == 'clientes' ? 'active' : '' ?>"
            href="../admin/clientes.php">

            <span class="menu-icon">👥</span>
            Clientes

        </a>

        <a
            class="<?= $pagina_actual == 'pagos' ? 'active' : '' ?>"
            href="../admin/pagos.php">

            <span class="menu-icon">💳</span>
            Pagos

        </a>

        <a
            class="<?= $pagina_actual == 'reportes' ? 'active' : '' ?>"
            href="../admin/reportes.php">

            <span class="menu-icon">📋</span>
            Reportes

        </a>

        <a
            class="<?= $pagina_actual == 'configuracion' ? 'active' : '' ?>"
            href="../admin/configuracion.php">

            <span class="menu-icon">⚙</span>
            Configuración

        </a>

        <a
            class="<?= $pagina_actual == 'perfil' ? 'active' : '' ?>"
            href="../admin/perfil.php">

            <span class="menu-icon">👤</span>
            Mi Perfil

        </a>

    </nav>

    <div class="sidebar-footer">

        <a
            href="../principal.php"
            class="back-store">

            🏪 Volver a la tienda

        </a>

        <a
            href="../../logout.php"
            class="logout-admin">

            ↳ Cerrar sesión

        </a>

    </div>

</div>
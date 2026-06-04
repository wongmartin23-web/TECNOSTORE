<?php

if (!isset($pagina_actual)) {
    $pagina_actual = '';
}

?>

<div class="admin-sidebar">

    <div class="admin-logo">
        TECNOSTORE
        <span>ADMIN</span>
    </div>

    <nav class="admin-menu">

        <a
            class="<?= $pagina_actual == 'dashboard' ? 'active' : '' ?>"
            href="../admin/dashboard.php">
            Dashboard
        </a>

        <a
            class="<?= $pagina_actual == 'productos' ? 'active' : '' ?>"
            href="../admin/productos.php">
            Productos
        </a>

        <a
            class="<?= $pagina_actual == 'pedidos' ? 'active' : '' ?>"
            href="../admin/pedidos.php">
            Pedidos
        </a>

        <a
            class="<?= $pagina_actual == 'clientes' ? 'active' : '' ?>"
            href="../admin/clientes.php">
            Clientes
        </a>

        <a
            class="<?= $pagina_actual == 'pagos' ? 'active' : '' ?>"
            href="../admin/pagos.php">
            Pagos
        </a>

        <a
            class="<?= $pagina_actual == 'reportes' ? 'active' : '' ?>"
            href="../admin/reportes.php">
            Reportes
        </a>

        <a
            class="<?= $pagina_actual == 'configuracion' ? 'active' : '' ?>"
            href="../admin/configuracion.php">
            Configuración
        </a>

    </nav>

    <a
        href="../principal.php"
        class="back-store">
        Volver a la tienda
    </a>

    <a
        href="../../logout.php"
        class="logout-admin">
        Cerrar sesión
    </a>

</div>
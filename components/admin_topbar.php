<div class="admin-topbar">

    <div class="topbar-title">
        <?= isset($titulo_pagina) ? $titulo_pagina : 'Dashboard' ?>
    </div>

    <div class="admin-user">

        <span>
            Hola,
            <?= $_SESSION['usuario']['nombre'] ?? 'Administrador' ?>
        </span>

        <div class="admin-avatar">
            👤
        </div>

    </div>

</div>
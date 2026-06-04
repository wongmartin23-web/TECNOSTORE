<?php

require_once '../../middleware/AdminAuth.php';

require_once '../../models/Producto.php';
require_once '../../models/Categoria.php';

require_once '../../controllers/ProductoController.php';
require_once '../../controllers/CategoriaController.php';

$pagina_actual = 'productos';

(new ProductoController())->guardar();
(new ProductoController())->eliminar();

(new CategoriaController())->guardar();

$productos =
    (new Producto())->obtenerTodos();

$categorias =
    (new Categoria())->obtenerTodas();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Productos</title>

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>

    <div class="admin-layout">

        <?php
        include '../../components/admin_sidebar.php';
        ?>

        <div class="admin-content">

            <?php include '../../components/admin_topbar.php'; ?>

            <h1 style="margin-bottom:20px;">
                Gestión de Productos
            </h1>

            <div style="
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:30px;
        margin-bottom:40px;
    ">

                <!-- PRODUCTOS -->

                <div style="
            background:#fff;
            padding:25px;
            border-radius:10px;
            border:1px solid #ddd;
        ">

                    <h2 style="margin-bottom:20px;">
                        Agregar Producto
                    </h2>

                    <form method="POST">

                        <input
                            type="text"
                            name="nombre"
                            placeholder="Nombre"
                            required
                            style="width:100%;padding:10px;">

                        <br><br>

                        <textarea
                            name="descripcion"
                            placeholder="Descripción"
                            style="width:100%;padding:10px;height:80px;"></textarea>

                        <br><br>

                        <input
                            type="number"
                            step="0.01"
                            name="precio"
                            placeholder="Precio"
                            required
                            style="width:100%;padding:10px;">

                        <br><br>

                        <input
                            type="number"
                            name="stock"
                            placeholder="Stock"
                            required
                            style="width:100%;padding:10px;">

                        <br><br>

                        <input
                            type="text"
                            name="imagen"
                            placeholder="Ruta imagen"
                            style="width:100%;padding:10px;">

                        <br><br>

                        <select
                            name="categoria"
                            style="width:100%;padding:10px;">

                            <?php foreach ($categorias as $cat): ?>

                                <option value="<?= $cat['id_categoria'] ?>">
                                    <?= $cat['nombre'] ?>
                                </option>

                            <?php endforeach; ?>

                        </select>

                        <br><br>

                        <button
                            type="submit"
                            name="crear_producto"
                            style="
                        background:#0D5EFF;
                        color:white;
                        border:none;
                        padding:12px 25px;
                        border-radius:6px;
                        cursor:pointer;
                        font-weight:bold;
                        font-size:15px;
                    ">

                            💾 Guardar Producto

                        </button>

                    </form>

                </div>

                <!-- CATEGORIAS -->

                <div style="
            background:#fff;
            padding:25px;
            border-radius:10px;
            border:1px solid #ddd;
        ">

                    <h2 style="margin-bottom:20px;">
                        Agregar Categoría
                    </h2>

                    <form method="POST">

                        <input
                            type="text"
                            name="nombre_categoria"
                            placeholder="Nombre categoría"
                            style="width:100%;padding:10px;">

                        <br><br>

                        <textarea
                            name="descripcion_categoria"
                            placeholder="Descripción"
                            style="width:100%;padding:10px;height:80px;"></textarea>

                        <br><br>

                        <button
                            type="submit"
                            name="crear_categoria"
                            style="
                        background:#16a34a;
                        color:white;
                        border:none;
                        padding:12px 25px;
                        border-radius:6px;
                        cursor:pointer;
                        font-weight:bold;
                        font-size:15px;
                    ">

                            ➕ Guardar Categoría

                        </button>

                    </form>

                </div>

            </div>

            <!-- TABLA -->

            <div style="
        background:#fff;
        padding:25px;
        border-radius:10px;
        border:1px solid #ddd;
    ">

                <h2 style="margin-bottom:20px;">
                    Listado de Productos
                </h2>

                <table style="
            width:100%;
            border-collapse:collapse;
            text-align:left;
        ">

                    <thead>

                        <tr style="
                    background:#f5f5f5;
                ">

                            <th style="padding:12px;">ID</th>
                            <th style="padding:12px;">Nombre</th>
                            <th style="padding:12px;">Categoría</th>
                            <th style="padding:12px;">Precio</th>
                            <th style="padding:12px;">Stock</th>
                            <th style="padding:12px;">Imagen</th>
                            <th style="padding:12px;">Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach ($productos as $producto): ?>

                            <tr style="border-top:1px solid #ddd;">

                                <td style="padding:12px;">
                                    <?= $producto['id_producto'] ?>
                                </td>

                                <td style="padding:12px;">
                                    <?= $producto['nombre'] ?>
                                </td>

                                <td style="padding:12px;">
                                    <?= $producto['categoria'] ?>
                                </td>

                                <td style="padding:12px;">
                                    S/ <?= $producto['precio'] ?>
                                </td>

                                <td style="padding:12px;">
                                    <?= $producto['stock'] ?>
                                </td>

                                <td style="padding:12px;">
                                    <?= $producto['imagen'] ?>
                                </td>

                                <td style="padding:12px;">

                                    <a
                                        href="#"
                                        style="
                                    background:#f59e0b;
                                    color:white;
                                    padding:6px 12px;
                                    text-decoration:none;
                                    border-radius:5px;
                                ">
                                        Editar
                                    </a>

                                    <a
                                        href="?eliminar=<?= $producto['id_producto'] ?>"
                                        onclick="return confirm('¿Eliminar producto?')"
                                        style="
                                    background:#dc2626;
                                    color:white;
                                    padding:6px 12px;
                                    text-decoration:none;
                                    border-radius:5px;
                                    margin-left:5px;
                                ">
                                        Eliminar
                                    </a>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>


</body>

</html>
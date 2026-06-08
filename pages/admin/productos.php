<?php

require_once '../../middleware/AdminAuth.php';

require_once '../../models/Producto.php';
require_once '../../models/Categoria.php';

require_once '../../controllers/ProductoController.php';
require_once '../../controllers/CategoriaController.php';

$pagina_actual = 'productos';
$titulo_pagina = 'Productos';

(new ProductoController())->guardar();
(new ProductoController())->eliminar();

(new CategoriaController())->guardar();

$productos =
    (new Producto())->obtenerTodos();

$categorias =
    (new Categoria())->obtenerTodas();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            <?php
            include '../../components/admin_topbar.php';
            ?>

            <div class="productos-body">

                <div class="productos-header">

                    <h2>Productos</h2>

                    <div class="productos-actions">

                        <a href="producto_nuevo.php" class="btn-primary">

                            + Nuevo Producto

                        </a>

                        <button class="btn-secondary">
                            + Categoría
                        </button>

                    </div>

                </div>

                <!-- FILTROS -->

                <div class="productos-filtros">

                    <input
                        type="text"
                        placeholder="Buscar producto...">

                    <select>

                        <option>
                            Todas las categorías
                        </option>

                        <?php foreach ($categorias as $cat): ?>

                            <option value="<?= $cat['id_categoria'] ?>">
                                <?= $cat['nombre'] ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                    <select>

                        <option>Estado</option>
                        <option>Activo</option>
                        <option>Inactivo</option>

                    </select>

                    <button class="btn-primary">
                        Buscar
                    </button>

                </div>

                <!-- TABLA -->

                <div class="productos-card">

                    <table class="tabla-productos">

                        <thead>

                            <tr>

                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Imagen</th>
                                <th>Acciones</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($productos as $producto): ?>

                                <tr>

                                    <td>
                                        <?= $producto['id_producto'] ?>
                                    </td>

                                    <td>
                                        <?= $producto['nombre'] ?>
                                    </td>

                                    <td>
                                        <?= $producto['categoria'] ?>
                                    </td>

                                    <td>
                                        S/ <?= number_format($producto['precio'], 2) ?>
                                    </td>

                                    <td>
                                        <?= $producto['stock'] ?>
                                    </td>

                                    <td>

                                        <?php if (!empty($producto['imagen'])): ?>

                                            <img
                                                src="<?= $producto['imagen'] ?>"
                                                class="producto-img">

                                        <?php endif; ?>

                                    </td>

                                    <td class="acciones">

                                        <a
                                            href="#"
                                            class="btn-editar">

                                            Editar

                                        </a>

                                        <a
                                            href="?eliminar=<?= $producto['id_producto'] ?>"
                                            onclick="return confirm('¿Eliminar producto?')"
                                            class="btn-eliminar">

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

    </div>

</body>

</html>
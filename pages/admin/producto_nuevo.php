<?php

require_once '../../middleware/AdminAuth.php';

require_once '../../models/Categoria.php';

$pagina_actual = 'productos';
$titulo_pagina = 'Nuevo Producto';

$categorias =
    (new Categoria())->obtenerTodas();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>
        Nuevo Producto
    </title>

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">

</head>

<body>

    <div class="admin-layout">

        <?php include '../../components/admin_sidebar.php'; ?>

        <div class="admin-content">

            <?php include '../../components/admin_topbar.php'; ?>

            <div class="nuevo-producto-container">

                <form
                    method="POST"
                    action="../../controllers/ProductoController.php"
                    enctype="multipart/form-data">

                    <div class="nuevo-producto-card">

                        <div class="nuevo-producto-grid">

                            <!-- COLUMNA IZQUIERDA -->

                            <div>

                                <div class="form-group">

                                    <h2>
                                        Nombre del producto *
                                    </h2>

                                    <input
                                        type="text"
                                        name="nombre"
                                        placeholder="Ej. Samsung Galaxy S24 Ultra"
                                        required>

                                </div>

                                <div class="form-group">

                                    <h2>
                                        Categoría *
                                    </h2>

                                    <select
                                        name="categoria"
                                        required>

                                        <option value="">
                                            Seleccionar categoría
                                        </option>

                                        <?php foreach ($categorias as $cat): ?>

                                            <option
                                                value="<?= $cat['id_categoria'] ?>">

                                                <?= $cat['nombre'] ?>

                                            </option>

                                        <?php endforeach; ?>

                                    </select>

                                </div>

                                <div class="form-group">

                                    <h2>
                                        Marca *
                                    </h2>

                                    <input
                                        type="text"
                                        name="marca"
                                        placeholder="Ej. Samsung">

                                </div>

                                <div class="form-group">

                                    <h2>
                                        Modelo
                                    </h2>

                                    <input
                                        type="text"
                                        name="modelo"
                                        placeholder="Ej. Galaxy S24 Ultra">

                                </div>

                            </div>

                            <!-- COLUMNA CENTRO -->

                            <div>

                                <div class="form-group">

                                    <h2>
                                        Precio (S/) *
                                    </h2>

                                    <input
                                        type="number"
                                        step="0.01"
                                        name="precio"
                                        placeholder="Ej. 4599.00"
                                        required>

                                </div>

                                <div class="form-group">

                                    <h2>
                                        Stock *
                                    </h2>

                                    <input
                                        type="number"
                                        name="stock"
                                        placeholder="Ej. 10"
                                        required>

                                </div>

                                <div class="form-group">

                                    <h2>
                                        Estado *
                                    </h2>

                                    <select name="estado">

                                        <option value="Activo">
                                            Activo
                                        </option>

                                        <option value="Inactivo">
                                            Inactivo
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <!-- COLUMNA DERECHA -->

                            <div>

                                <h2>
                                    Imagen del producto
                                </h2>

                                <div class="upload-box">

                                    <input
                                        type="file"
                                        name="imagen"
                                        accept=".jpg,.jpeg,.png">

                                    <div>

                                        <h3>
                                            Seleccionar imagen
                                        </h3>

                                        <p>
                                            o arrastra y suelta aquí
                                        </p>

                                        <span>
                                            JPG, PNG (Máx. 2MB)
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="form-group descripcion-group">

                            <h2>
                                Descripción
                            </h2>

                            <textarea
                                name="descripcion"
                                placeholder="Describe las características del producto..."></textarea>

                        </div>

                    </div>

                    <div class="nuevo-producto-footer">

                        <a
                            href="productos.php"
                            class="btn-cancelar">

                            Cancelar

                        </a>

                        <button
                            type="submit"
                            name="crear_producto"
                            class="btn-guardar">

                            Guardar Producto

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</body>

</html>
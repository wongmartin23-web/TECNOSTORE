<?php

require_once __DIR__ . '/../models/Categoria.php';

class CategoriaController
{
    public function guardar()
    {
        if (
            isset($_POST['crear_categoria'])
        ) {

            $categoria =
                new Categoria();

            $categoria->crear(
                $_POST['nombre_categoria'],
                $_POST['descripcion_categoria']
            );

            header(
                "Location: productos.php"
            );

            exit;
        }
    }
}

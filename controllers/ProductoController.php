<?php

require_once __DIR__ . '/../models/Producto.php';

class ProductoController
{
    public function guardar()
    {
        if (
            isset($_POST['crear_producto'])
        ) {

            $producto =
                new Producto();

            $producto->crear(
                $_POST['nombre'],
                $_POST['descripcion'],
                $_POST['precio'],
                $_POST['stock'],
                $_POST['imagen'],
                $_POST['categoria']
            );

            header(
                "Location: productos.php"
            );

            exit;
        }
    }

    public function eliminar()
    {
        if (
            isset($_GET['eliminar'])
        ) {

            $producto =
                new Producto();

            $producto->eliminar(
                $_GET['eliminar']
            );

            header(
                "Location: productos.php"
            );

            exit;
        }
    }
}

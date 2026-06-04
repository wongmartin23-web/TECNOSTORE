<?php

require_once __DIR__ . '/../database/Conexion.php';

class Producto
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::conectar();
    }

    public function obtenerTodos()
    {
        $sql = "
            SELECT
                p.*,
                c.nombre AS categoria
            FROM productos p
            LEFT JOIN categorias c
                ON p.id_categoria = c.id_categoria
            ORDER BY p.id_producto DESC
        ";

        return $this->conexion
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear(
        $nombre,
        $descripcion,
        $precio,
        $stock,
        $imagen,
        $categoria
    ) {
        $sql = "
            INSERT INTO productos
            (
                nombre,
                descripcion,
                precio,
                stock,
                imagen,
                id_categoria
            )
            VALUES
            (
                :nombre,
                :descripcion,
                :precio,
                :stock,
                :imagen,
                :categoria
            )
        ";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':precio' => $precio,
            ':stock' => $stock,
            ':imagen' => $imagen,
            ':categoria' => $categoria
        ]);
    }

    public function eliminar($id)
    {
        $sql = "
            DELETE FROM productos
            WHERE id_producto = :id
        ";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':id' => $id
        ]);
    }
}

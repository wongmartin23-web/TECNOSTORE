<?php

require_once __DIR__ . '/../database/Conexion.php';

class Categoria
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::conectar();
    }

    public function obtenerTodas()
    {
        $sql = "
            SELECT *
            FROM categorias
            ORDER BY nombre
        ";

        return $this->conexion
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear(
        $nombre,
        $descripcion
    ) {
        $sql = "
            INSERT INTO categorias
            (
                nombre,
                descripcion
            )
            VALUES
            (
                :nombre,
                :descripcion
            )
        ";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':nombre' => $nombre,
            ':descripcion' => $descripcion
        ]);
    }
}

<?php

require_once __DIR__ . '/../database/Conexion.php';

class Usuario
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::conectar();
    }

    public function registrar(
        $nombre,
        $apellido,
        $correo,
        $contrasena
    ) {

        $sql = "
            INSERT INTO usuarios
            (
                nombre,
                apellido,
                correo,
                contrasena
            )
            VALUES
            (
                :nombre,
                :apellido,
                :correo,
                :contrasena
            )
        ";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':contrasena' => password_hash(
                $contrasena,
                PASSWORD_DEFAULT
            )
        ]);
    }

    public function obtenerPorCorreo($correo)
    {

        $sql = "
            SELECT *
            FROM usuarios
            WHERE correo = :correo
        ";

        $stmt = $this->conexion->prepare($sql);

        $stmt->execute([
            ':correo' => $correo
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

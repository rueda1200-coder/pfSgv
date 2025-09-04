<?php


class ModeloUsuarios
{

    public static function mdlRegistrarUsuario($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare(
                "INSERT INTO $tabla (nombre, usuario, clave, rol_id) 
                 VALUES (:nombre, :usuario, :clave, :rol_id)"
            );

            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
            $stmt->bindParam(":rol_id", $datos["rol_id"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }
    }
}


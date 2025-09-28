<?php


class ModeloUsuarios
{

    /* ==============================
       REGISTRAR USUARIO RECEPCIONISTA
    ============================== */
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


    /* ==============================
     MOSTRAR USUARIOS
  ============================== */
    static public function mdlMostrarUsuarios($tabla)
    {
        $stmt = Conexion::conectar()->prepare("
        SELECT u.id, u.nombre, u.usuario, u.rol_id, r.nombre AS rol_nombre, u.fecha_creacion
        FROM $tabla u
        LEFT JOIN roles r ON u.rol_id = r.id
        WHERE u.id != 1
    ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /* ==============================
       CREAR USUARIO
    ============================== */
    public static function mdlCrearUsuario($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("
            INSERT INTO $tabla (nombre, usuario, clave, rol_id, creado_por, fecha_creacion) 
            VALUES (:nombre, :usuario, :clave, :rol_id, :creado_por, NOW())
        ");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
        $stmt->bindParam(":rol_id", $datos["rol_id"], PDO::PARAM_INT);
        $stmt->bindParam(":creado_por", $datos["creado_por"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    /* ==============================
       EDITAR USUARIO
    ============================== */
    public static function mdlEditarUsuario($tabla, $datos)
    {
        if (!empty($datos["clave"])) {
            $stmt = Conexion::conectar()->prepare("
                UPDATE $tabla 
                SET nombre = :nombre, usuario = :usuario, rol_id = :rol_id, clave = :clave 
                WHERE id = :id
            ");
            $stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
        } else {
            $stmt = Conexion::conectar()->prepare("
                UPDATE $tabla 
                SET nombre = :nombre, usuario = :usuario, rol_id = :rol_id 
                WHERE id = :id
            ");
        }

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":rol_id", $datos["rol_id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    /* ==============================
       ELIMINAR USUARIO
    ============================== */
    public static function mdlEliminarUsuario($tabla, $id)
    {
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}



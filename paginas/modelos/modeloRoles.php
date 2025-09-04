<?php

class ModeloRoles {

    /* ==============================
       MOSTRAR ROLES
    ============================== */
    public static function mdlMostrarRoles($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /* ==============================
       CREAR ROL
    ============================== */
    public static function mdlCrearRol($tabla, $datos) {
        $stmt = Conexion::conectar()->prepare(
            "INSERT INTO $tabla (nombre) VALUES (:nombre)"
        );
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    /* ==============================
       EDITAR ROL
    ============================== */
    public static function mdlEditarRol($tabla, $datos) {
        $stmt = Conexion::conectar()->prepare(
            "UPDATE $tabla SET nombre = :nombre WHERE id = :id"
        );
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    /* ==============================
       ELIMINAR ROL
    ============================== */
    public static function mdlEliminarRol($tabla, $id) {
        $stmt = Conexion::conectar()->prepare(
            "DELETE FROM $tabla WHERE id = :id"
        );
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}

<?php
require_once "conexion.php";

class ModeloRoles
{

    /* ==============================
       MOSTRAR ROLES
    ============================== */
    public static function mdlMostrarRoles($tabla)
    {
        try {
            $pdo = Conexion::conectar();
            $stmt = $pdo->prepare("SELECT * FROM $tabla WHERE id != 1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    /* ==============================
       CREAR ROL
    ============================== */
    public static function mdlCrearRol($nombreRol)
    {
        try {
            $pdo = Conexion::conectar();
            $stmt = $pdo->prepare("INSERT INTO roles (nombre) VALUES (:nombre)");
            $stmt->bindParam(":nombre", $nombreRol, PDO::PARAM_STR);

            return $stmt->execute() ? "ok" : "error";
        } catch (PDOException $e) {
            return "error";
        }
    }

    /* ==============================
       EDITAR ROL
    ============================== */
    public static function mdlEditarRol($tabla, $datos)
    {
        try {
            $pdo = Conexion::conectar();
            $stmt = $pdo->prepare("UPDATE $tabla SET nombre = :nombre WHERE id = :id");
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

            return $stmt->execute() ? "ok" : "error";
        } catch (PDOException $e) {
            return "error";
        }
    }
    /* ==============================
       ELIMINAR ROL
    ============================== */
    public static function mdlEliminarRol($tabla, $id)
    {
        if ($id == 1) {
            return "error"; // nunca eliminar admin
        }

        try {
            $pdo = Conexion::conectar();
            $stmt = $pdo->prepare("DELETE FROM $tabla WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            return $stmt->execute() ? "ok" : "error";
        } catch (PDOException $e) {
            return "error";
        }
    }
}

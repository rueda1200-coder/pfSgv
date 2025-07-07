<?php
require_once "conexion.php";

class ModeloLogin {

    static public function mdlIniciarSesion($usuario) {
        $stmt = Conexion::conectar()->prepare("SELECT u.*, r.nombre AS nombre_rol 
                                               FROM usuarios u 
                                               INNER JOIN roles r ON u.rol_id = r.id 
                                               WHERE u.usuario = :usuario");
        $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

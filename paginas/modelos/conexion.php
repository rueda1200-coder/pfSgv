<?php
class Conexion {
    private static $instancia = null;

    public static function conectar() {
        if (self::$instancia === null) {
            try {
                self::$instancia = new PDO(
                    "mysql:host=localhost;dbname=pf_sgv",
                    "root", // usuario
                    ""      // contraseña
                );
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instancia->exec("SET NAMES utf8");
            } catch (PDOException $e) {
                die("❌ Error de conexión: " . $e->getMessage());
            }
        }
        return self::$instancia;
    }
}

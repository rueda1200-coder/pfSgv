<?php
require_once "modelos/login.modelo.php";

class ControladorLogin {

    static public function ctrIniciarSesion() {

        if (isset($_POST["login"])) {

            $datosUsuario = ModeloLogin::mdlIniciarSesion($_POST["usuario"]);

            if ($datosUsuario && password_verify($_POST["clave"], $datosUsuario["clave"])) {

                session_start();
                $_SESSION["usuario"] = $datosUsuario["usuario"];
                $_SESSION["nombre"] = $datosUsuario["nombre"];
                $_SESSION["rol"] = $datosUsuario["nombre_rol"]; // Ej: Administrador o Recepcionista

                // Redirigir según el rol
                if ($_SESSION["rol"] === "Administrador") {
                    header("Location: index.php?route=home");
                    exit;
                } elseif ($_SESSION["rol"] === "Recepcionista") {
                    header("Location: index.php?route=home"); // Puedes cambiar esta ruta si hay panel específico
                    exit;
                } else {
                    echo '<div class="alert alert-danger">Rol no autorizado.</div>';
                }

            } else {
                echo '<div class="alert alert-danger">Usuario o contraseña incorrectos.</div>';
            }
        }
    }
}

<?php
// Iniciar la sesión aquí, una sola vez
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once "controladores/plantilla.controlador.php";
require_once "controladores/registro.rol.controlador.php";
require_once "controladores/login.controlador.php";
require_once "controladores/controladorRoles.php";

require_once "modelos/modeloRoles.php"; // si tu controlador depende del modelo
require_once "modelos/login.modelo.php";
require_once "modelos/registroRol.php";
require_once "modelos/login.modelo.php";

/* ==============================
   PROCESO LOGIN
============================== */
if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_GET["route"], $_GET["action"]) &&
    $_GET["route"] == "login" &&
    $_GET["action"] == "verify"
) {
    $controllerLogin = new ControladorLogin();
    $controllerLogin->ctrIniciarSesion();
    exit; // evita que cargue la plantilla
}

/* ==============================
   PROCESO REGISTRO USUARIO
============================== */
if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_GET["route"], $_GET["action"]) &&
    $_GET["route"] == "registroUsuario" &&
    $_GET["action"] == "verify"
) {
    $controllerUsuario = new ControladorUsuarios();
    $controllerUsuario->ctrRegistrarUsuario($_POST);
    exit; // evita que cargue la plantilla
}

/* ==============================
   PROCESO CONFIGURACIÓN USUARIO (roles, edición, eliminación, etc.)
============================== */
if (isset($_GET["route"])) {
    switch ($_GET["route"]) {
        case "configuracionUsuario":
            include "vistas/modulos/configuracionUsuario.php";
            break;

        case "configuracionRoles":
            include "vistas/modulos/configuracionRoles/configuracionRoles.php";
            break;
    }
}

/* ==============================
   PROCESO CONFIGURACIÓN USUARIO
============================== */
if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_GET["route"], $_GET["action"]) &&
    $_GET["route"] == "configuracionUsuario"
) {
    $controllerUsuario = new ControladorUsuarios();

    switch ($_GET["action"]) {
        case "editar":
            echo json_encode($controllerUsuario->ctrEditarUsuario($_POST));
            break;
        case "eliminar":
            echo json_encode($controllerUsuario->ctrEliminarUsuario());
            break;
    }
    exit;
}

/* ==============================
   CARGAR PLANTILLA
============================== */
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

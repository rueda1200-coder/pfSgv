<?php

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
if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_GET["route"], $_GET["action"]) &&
    $_GET["route"] == "configuracionUsuario"
) {
    $controllerRol = new ControladorRoles();

    switch ($_GET["action"]) {
        case "crearRol":
            $controllerRol->ctrCrearRol();
            break;
        case "editarRol":
            $controllerRol->ctrEditarRol();
            break;
        case "eliminarRol":
            $controllerRol->ctrEliminarRol();
            break;
    }

    exit; // evita que cargue plantilla dos veces
}


/* ==============================
   CARGAR PLANTILLA
============================== */
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();


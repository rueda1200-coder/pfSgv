<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/login.controlador.php";

require_once "modelos/login.modelo.php";


if(
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_GET["route"], $_GET["action"]) &&
    $_GET["route"] == "login" &&
    $_GET["action"] == "verify"
){
    $controllerLogin = new ControladorLogin();
    $controllerLogin->ctrIniciarSesion();
    exit; //evita que cargue la plantilla
}






$plantilla = new ControladorPlantilla(); 

$plantilla->ctrPlantilla();




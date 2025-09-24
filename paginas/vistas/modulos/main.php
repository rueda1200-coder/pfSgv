<main id="main" class="main">
<?php

$allowed_routes = ["home", "servicios", "contacto", "login", "gestionUsuarios","configuracionUsuario",
                    "gestionCitas", "registroUsuario", "salir", "404"];

if (isset($_GET["route"]) && in_array($_GET["route"], $allowed_routes)) {

    // Manejar la ruta "salir" de forma especial
    if ($_GET["route"] === "salir") {
        include "vistas/modulos/salir.php";
        return; // IMPORTANTE: detiene la ejecución para evitar continuar con el HTML
    }

    include "vistas/modulos/" . $_GET["route"] . ".php";

} elseif (isset($_GET["route"])) {
    include "vistas/modulos/404.php";
} else {
    include "vistas/modulos/home.php";
}
?>
</main>

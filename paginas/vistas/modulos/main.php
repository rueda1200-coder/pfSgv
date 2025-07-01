

<main id="main" class="main">

  <?php
  $allowed_routes = ["home", "servicios", "contacto", "login"];

  if (isset($_GET["route"]) && in_array($_GET["route"], $allowed_routes)) {
      include "vistas/modulos/" . $_GET["route"] . ".php";
  } elseif (isset($_GET["route"])) {
      include "vistas/modulos/404.php";
  } else {
      include "vistas/modulos/home.php";
  }
  ?>

</main>

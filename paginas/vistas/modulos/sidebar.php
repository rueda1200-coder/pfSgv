<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="home">
        <i class="bi bi-house-door-fill"></i>
        <span>Inicio</span>
      </a>
    </li>

    <!-- Resto de ítems del menú... -->

    <li class="nav-item">
      <a class="nav-link" href="index.php?route=salir">
        <i class="bi bi-box-arrow-left"></i>
        <span>Cerrar Sesión</span>
      </a>
    </li>

  </ul>
</aside>


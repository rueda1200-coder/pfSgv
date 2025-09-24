<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<!-- Botón para abrir el sidebar -->
<button class="btn btn-primary m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
  <i class="bi bi-list"></i> Menú
</button>

<!-- Sidebar como offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" data-bs-backdrop="false">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menú</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="sidebar-nav list-unstyled">

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
  </div>
</div>

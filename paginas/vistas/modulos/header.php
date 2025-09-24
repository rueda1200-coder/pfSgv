<?php if (!isset($_SESSION)) session_start(); ?>

<!-- ENCABEZADO FIJO -->
<header id="header" class="header fixed-top d-flex align-items-center justify-content-between bg-white shadow-sm px-3">

  <!-- LOGO Y TÍTULO -->
  <div class="d-flex align-items-center">
    <a href="index.php" class="logo d-flex align-items-center text-decoration-none">
      <img src="vistas/assets/img/logo.png" alt="Logo" style="height: 40px;">
      <span class="d-none d-lg-block ms-2 fw-bold text-dark">Sistema Veterinario</span>
    </a>

    <!-- BOTÓN HAMBURGUESA: SOLO SI HAY SESIÓN -->
    <?php if (isset($_SESSION['usuario'])): ?>
      <button class="btn btn-outline-primary ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="sidebar">
        <i class="bi bi-list fs-4"></i>
      </button>
    <?php endif; ?>

  </div>

  <!-- BARRA DE BÚSQUEDA (SI HAY SESIÓN) -->
  <?php if (isset($_SESSION['usuario'])): ?>
    <div class="search-bar d-none d-md-flex align-items-center">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Buscar" title="Buscar...">
        <button type="submit" title="Buscar"><i class="bi bi-search"></i></button>
      </form>
    </div>
  <?php endif; ?>

  <!-- NAVEGACIÓN SUPERIOR -->
  <nav class="header-nav ms-auto d-flex align-items-center">
    <ul class="nav d-flex align-items-center mb-0">
      <?php if (!isset($_SESSION['usuario'])): ?>
        <li class="nav-item">
          <a class="nav-link px-3" href="index.php?route=login">INICIAR SESIÓN</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link px-3" href="index.php?route=salir">CERRAR SESIÓN</a>
        </li>
      <?php endif; ?>
    </ul>

    <div class="d-none d-md-block ms-4">
      <span class="text-muted small">📞 Contacto: +57 5873842</span>
    </div>
  </nav>
</header>

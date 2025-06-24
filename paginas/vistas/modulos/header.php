<header id="header" class="header fixed-top d-flex align-items-center justify-content-between">

  <!-- Logo y Título -->
  <div class="d-flex align-items-center">
    <a href="index.php" class="logo d-flex align-items-center">
      <img src="paginas/vistas/assets/img/logo.png" alt="Logo" style="height: 40px;">
      <span class="d-none d-lg-block ms-2 fw-bold">Sistema Veterinario</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn ms-3"></i>
  </div>

  <!-- Barra de búsqueda -->
  <div class="search-bar d-flex align-items-center">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Buscar" title="Buscar...">
      <button type="submit" title="Buscar"><i class="bi bi-search"></i></button>
    </form>
  </div>

  <!-- Navegación superior -->
  <nav class="header-nav ms-auto d-flex align-items-center">

    <!-- Menú -->
    <ul class="nav d-flex align-items-center mb-0">

      <li class="nav-item">
        <a class="nav-link px-3" href="servicios.php">SERVICIOS</a>
      </li>

      <li class="nav-item">
        <a class="nav-link px-3" href="login.php">INICIAR SESIÓN</a>
      </li>

    </ul>

    <!-- Contacto -->
    <div class="d-none d-md-block ms-4">
      <span class="text-muted small">📞 Contacto: +57 5873842</span>
    </div>

  </nav>

</header>

<?php if (isset($_SESSION['usuario'])): ?>
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Inicio -->
    <li class="nav-item">
      <a class="nav-link" href="home">
        <i class="bi bi-house-door-fill"></i>
        <span>Inicio</span>
      </a>
    </li>

    <!-- Gestión de Pacientes -->
    <li class="nav-item">
      <a class="nav-link" href="pacientes">
        <i class="bi bi-people-fill"></i>
        <span>Pacientes</span>
      </a>
    </li>

    <!-- Citas -->
    <li class="nav-item">
      <a class="nav-link" href="citas">
        <i class="bi bi-calendar-check-fill"></i>
        <span>Gestión de Citas</span>
      </a>
    </li>

    <!-- Consultas Médicas -->
    <li class="nav-item">
      <a class="nav-link" href="consultas">
        <i class="bi bi-clipboard2-pulse-fill"></i>
        <span>Consultas Médicas</span>
      </a>
    </li>

    <!-- Servicios -->
    <li class="nav-item">
      <a class="nav-link" href="servicios">
        <i class="bi bi-bag-plus-fill"></i>
        <span>Servicios Veterinarios</span>
      </a>
    </li>

    <!-- Inventario -->
    <li class="nav-item">
      <a class="nav-link" href="inventario">
        <i class="bi bi-box-seam"></i>
        <span>Inventario</span>
      </a>
    </li>

    <!-- Reportes -->
    <li class="nav-item">
      <a class="nav-link" href="reportes">
        <i class="bi bi-bar-chart-line-fill"></i>
        <span>Reportes</span>
      </a>
    </li>

    <!-- Usuarios y Roles -->
    <li class="nav-item">
      <a class="nav-link" href="usuarios">
        <i class="bi bi-person-fill-gear"></i>
        <span>Usuarios y Roles</span>
      </a>
    </li>

    <!-- Cerrar Sesión -->
    <li class="nav-item">
      <a class="nav-link" href="logout.php">
        <i class="bi bi-box-arrow-left"></i>
        <span>Cerrar Sesión</span>
      </a>
    </li>

  </ul>

</aside>
<?php endif; ?>

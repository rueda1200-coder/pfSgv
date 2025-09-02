<?php
?>

<div class="alert alert-success text-center">
    Bienvenido, <?php echo $_SESSION['nombre']; ?> (<?php echo $_SESSION['rol']; ?>)
</div>

<div class="container-md"></div>
<div class="centered-text">
    Con este módulo podrás Gestionar Tus usuarios
</div>

<div class="container my-4">
  <div class="row justify-content-center g-4">
    
    <!-- Servicio 1 -->
    <div class="col-md-3 text-center">
      <div class="p-4 border rounded shadow-sm h-100">
        <img src="vistas/assets/img/iconoUsuarios.png" alt="Usuarios" style="height: 60px;">
        <h5 class="mt-3 fw-semibold">Gestion Registro</h5>
        <p class="text-muted">Permite al administrador crear nuevos usuarios dentro del sistema.</p>
        <a href="index.php?paginas=gestionUsuarios" class="btn btn-primary btn-sm">Gestion Registro</a>
      </div>
    </div>

    <!-- Servicio 2 -->
    <div class="col-md-3 text-center">
      <div class="p-4 border rounded shadow-sm h-100">
        <img src="vistas/assets/img/iconoUsuarios.png" alt="Usuarios" style="height: 60px;">
        <h5 class="mt-3 fw-semibold">Configuracion Usuario</h5>
        <p class="text-muted">Permite gestionar los usuarios estan dentro del sistema registrados.</p>
        <a href="index.php?paginas=gestionUsuarios" class="btn btn-primary btn-sm">Ir a Gestion Usuarios</a>
      </div>
    </div>

  </div>
</div>

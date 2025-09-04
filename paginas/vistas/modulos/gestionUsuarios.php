<?php
$rol = $_SESSION['rol'] ?? 'invitado'; 
?>

<?php
$rol = $_SESSION['rol'] ?? 'invitado'; 
$nombre = $_SESSION['nombre'] ?? 'Usuario';
?>

<div class="alert alert-success text-center">
    <?php if ($rol === 'Administrador'): ?>
        Bienvenido, <strong><?php echo $nombre; ?></strong> (Administrador)  
        <br>✅ Tienes acceso total al sistema.
    
    <?php elseif ($rol === 'recepcionista'): ?>
        Bienvenido, <strong><?php echo $nombre; ?></strong> (Recepcionista)  
        <br>🔑 Tienes acceso a módulos limitados.
    
    <?php elseif ($rol === 'invitado'): ?>
        Bienvenido, <strong><?php echo $nombre; ?></strong> (Invitado)  
        <br>👀 Solo puedes visualizar información básica del sistema.
    
    <?php else: ?>
        Bienvenido, <strong><?php echo $nombre; ?></strong> (Rol desconocido)  
        <br>⚠️ Consulta con el administrador.
    <?php endif; ?>
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

        <?php if ($rol === 'Administrador'): ?>
            <a href="index.php?route=registroUsuario" class="btn btn-primary btn-sm">Gestion Registro</a>
        <?php else: ?>
            <button class="btn btn-secondary btn-sm" disabled>No disponible</button>
        <?php endif; ?>
      </div>
    </div>

    <!-- Servicio 2 -->
    <div class="col-md-3 text-center">
      <div class="p-4 border rounded shadow-sm h-100">
        <img src="vistas/assets/img/configuracionUsuario.png" alt="Usuarios" style="height: 60px;">
        <h5 class="mt-3 fw-semibold">Configuración Usuario</h5>
        <p class="text-muted">Permite gestionar los usuarios que están registrados dentro del sistema.</p>

        <?php if ($rol === 'Administrador'): ?>
            <a href="index.php?route=configuracionUsuario" class="btn btn-primary btn-sm">Ir a Configuracion Usuarios</a>
        <?php else: ?>
            <button class="btn btn-secondary btn-sm" disabled>No disponible</button>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>

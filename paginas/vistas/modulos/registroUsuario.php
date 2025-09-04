<?php
$rol = $_SESSION['rol'] ?? 'invitado';

if ($rol !== 'Administrador') {
    echo '<div class="alert alert-danger text-center">⚠️ No tienes permiso para acceder a este módulo.</div>';
    exit;
}
?>

<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h3>Registrar Usuario (Recepcionista)</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="index.php?route=registroUsuario">
                <!-- Nombre -->
                <div class="mb-3">
                    <label class="form-label">Nombre completo</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <!-- Usuario -->
                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control" required>
                </div>

                <!-- Contraseña -->
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="clave" class="form-control" required>
                </div>

                <!-- Rol fijo -->
                <input type="hidden" name="rol_id" value="2"> <!-- ejemplo: 2 = Recepcionista -->

                <div class="text-center">
                    <button type="submit" name="registrar" class="btn btn-success">Registrar</button>
                    <a href="index.php?paginas=gestionUsuarios" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
// Llamada al controlador si se envió el formulario
if (isset($_POST['registrar'])) {
    ControladorUsuarios::ctrRegistrarUsuario($_POST);
}
?>
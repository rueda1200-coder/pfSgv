<div class="container-xxl">
    <div class="row">
        <div class="col-lg-10 mx-auto">

            <!-- CARD LISTADO DE USUARIOS -->
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gestión de Usuarios</h5>
                    <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalAgregarUsuario">
                        <i class="fas fa-plus"></i> Nuevo Usuario
                    </button>
                </div>

                <div class="card-body">
                    <p class="text-muted">Administra los usuarios registrados en el sistema</p>
                    <ul class="list-group list-group-flush" id="listadoUsuarios">
                        <?php
                        // Obtener usuarios desde el controlador
                        $usuarios = ControladorUsuarios::ctrMostrarUsuarios();

                        if (!empty($usuarios)):
                            foreach ($usuarios as $usuario): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong><?= htmlspecialchars($usuario["nombre"]); ?></strong>
                                        <span class="badge bg-info text-dark ms-2">
                                            <?= htmlspecialchars($usuario["rol_nombre"] ?? "Sin rol"); ?>
                                        </span>
                                        <br>
                                        <small class="text-muted"><?= htmlspecialchars($usuario["usuario"]); ?></small>
                                    </div>
                                    <div>
                                        <!-- Botón Editar -->
                                        <button class="btn btn-warning btn-sm btnEditarUsuario"
                                            data-bs-toggle="modal" data-bs-target="#modalEditarUsuario"
                                            data-id="<?= $usuario["id"]; ?>"
                                            data-nombre="<?= htmlspecialchars($usuario["nombre"]); ?>"
                                            data-usuario="<?= htmlspecialchars($usuario["usuario"]); ?>"
                                            data-rol="<?= $usuario["rol_id"]; ?>">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <!-- Botón Eliminar -->
                                        <button class="btn btn-danger btn-sm btnEliminarUsuario"
                                            data-bs-toggle="modal" data-bs-target="#modalEliminarUsuario"
                                            data-id="<?= $usuario["id"]; ?>"
                                            data-nombre="<?= htmlspecialchars($usuario["nombre"]); ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </li>
                            <?php endforeach;
                        else: ?>
                            <li class="list-group-item text-center text-muted">
                                No hay usuarios registrados.
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <!-- MODALES -->
            <?php include "modalAgregarUsuario.php"; ?>
            <?php include "modalEditarUsuario.php"; ?>
            <?php include "modalEliminarUsuario.php"; ?>

        </div>
    </div>
</div>

<!-- SCRIPT -->
<script src="vistas/modulos/usuarios/configuracionUsuarios.js"></script>

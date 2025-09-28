<div class="container-xxl">
    <div class="row">
        <div class="col-lg-8 mx-auto">

            <!-- CARD LISTADO DE ROLES -->
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gestión de Roles</h5>
                    <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalAgregarRol">
                        <i class="fas fa-plus"></i> Nuevo Rol
                    </button>
                </div>

                <div class="card-body">
                    <p class="text-muted">Administra los roles disponibles en el sistema</p>
                    <ul class="list-group list-group-flush" id="listadoRoles">
                        <?php
                        $roles = ControladorRoles::ctrMostrarRoles();
                        if (!empty($roles)):
                            foreach ($roles as $rol): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <?= htmlspecialchars($rol["nombre"]); ?>
                                    <div>
                                        <button class="btn btn-warning btn-sm btnEditarRol" data-bs-toggle="modal"
                                            data-bs-target="#modalEditarRol" data-id="<?= $rol["id"]; ?>"
                                            data-nombre="<?= htmlspecialchars($rol["nombre"]); ?>">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm btnEliminarRol" data-bs-toggle="modal"
                                            data-bs-target="#modalEliminarRol" data-id="<?= $rol["id"]; ?>"
                                            data-nombre="<?= htmlspecialchars($rol["nombre"]); ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </li>
                            <?php endforeach;
                        else: ?>
                            <li class="list-group-item text-center text-muted">
                                No hay roles registrados.
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <!-- MODALES -->
            <?php include "modalesRol.php"; ?>

        </div>
    </div>
</div>

<!-- SCRIPT -->
<script src="vistas/assets/js/configuracionRoles.js"></script>

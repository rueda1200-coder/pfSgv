<div class="modal fade" id="modalEditarUsuario" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formEditarUsuario">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id" id="editarId">

                    <div class="mb-3">
                        <label>Nombre completo</label>
                        <input type="text" name="nombre" id="editarNombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="editarUsuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Rol</label>
                        <select name="rol" id="editarRol" class="form-select" required>
                            <?php
                            $roles = ControladorRoles::ctrMostrarRoles();
                            foreach ($roles as $rol) {
                                echo '<option value="'.$rol["id"].'">'.htmlspecialchars($rol["nombre"]).'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ================= MODALES PARA USUARIOS ================= -->

<!-- Modal Agregar Usuario -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" aria-labelledby="modalAgregarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAgregarUsuarioLabel">Agregar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="index.php?route=usuarios&accion=agregar">
          <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
          </div>
          <div class="mb-3">
            <label for="rolUsuario" class="form-label">Rol</label>
            <select class="form-select" id="rolUsuario" name="rolUsuario" required>
              <option value="">Seleccione un rol</option>
              <?php
              $roles = ControladorRoles::ctrMostrarRoles();
              foreach ($roles as $rol): ?>
                  <option value="<?= $rol['id']; ?>"><?= htmlspecialchars($rol['nombre']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Editar Usuario -->
<div class="modal fade" id="modalEditarUsuario" tabindex="-1" aria-labelledby="modalEditarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarUsuarioLabel">Editar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="index.php?route=usuarios&accion=editar">
          <input type="hidden" name="idUsuario">
          <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreUsuario" required>
          </div>
          <div class="mb-3">
            <label for="rolUsuario" class="form-label">Rol</label>
            <select class="form-select" name="rolUsuario" required>
              <?php
              $roles = ControladorRoles::ctrMostrarRoles();
              foreach ($roles as $rol): ?>
                  <option value="<?= $rol['id']; ?>"><?= htmlspecialchars($rol['nombre']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-warning">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Eliminar Usuario -->
<div class="modal fade" id="modalEliminarUsuario" tabindex="-1" aria-labelledby="modalEliminarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarUsuarioLabel">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p>¿Seguro que deseas eliminar al usuario <strong class="usuario-nombre"></strong>?</p>
        <form method="POST" action="index.php?route=usuarios&accion=eliminar">
          <input type="hidden" name="idUsuario">
          <button type="submit" class="btn btn-danger">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalAgregarRol" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Agregar Rol</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nombre del Rol</label>
            <input type="text" name="nuevoRol" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </div>
      <?php
        $crearRol = new ControladorRoles();
        $crearRol->ctrCrearRol();
      ?>
    </form>
  </div>
</div>

<!-- Modal Editar Rol -->
<div class="modal fade" id="modalEditarRol" tabindex="-1" aria-labelledby="modalEditarRolLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" id="modalEditarRolLabel">Editar Rol</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="idRol" name="idRol">

          <div class="mb-3">
            <label for="editarRol" class="form-label">Nombre del Rol</label>
            <input type="text" class="form-control" id="editarRol" name="editarRol" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
      </div>

      <?php
        $editarRol = new ControladorRoles();
        $respuesta = $editarRol->ctrEditarRol();

        if ($respuesta == "ok") {
            echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "¡El rol ha sido actualizado correctamente!",
                      showConfirmButton: false,
                      timer: 1500
                    }).then(() => {
                      window.location = "index.php?route=configuracionUsuario";
                    });
                  </script>';
        } elseif ($respuesta == "error") {
            echo '<script>
                    Swal.fire({
                      icon: "error",
                      title: "Error al actualizar rol",
                      showConfirmButton: true
                    });
                  </script>';
        }
      ?>
    </form>
  </div>
</div>

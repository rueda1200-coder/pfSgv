<!-- Modal Eliminar Rol -->
<div class="modal fade" id="modalEliminarRol" tabindex="-1" aria-labelledby="modalEliminarRolLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="modalEliminarRolLabel">Eliminar Rol</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="idRolEliminar" name="idRolEliminar">
          <p class="text-center">¿Estás seguro de que deseas eliminar este rol?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>
      </div>

      <?php
        $eliminarRol = new ControladorRoles();
        $respuesta = $eliminarRol->ctrEliminarRol();

        if ($respuesta == "ok") {
            echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "¡El rol ha sido eliminado correctamente!",
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
                      title: "Error al eliminar rol",
                      showConfirmButton: true
                    });
                  </script>';
        }
      ?>
    </form>
  </div>
</div>

<?php
class ControladorRoles {

    /* ==============================
       MOSTRAR ROLES
    ============================== */
    public static function ctrMostrarRoles() {
        $tabla = "roles";
        $respuesta = ModeloRoles::mdlMostrarRoles($tabla);
        return $respuesta;
    }

    /* ==============================
       CREAR ROL
    ============================== */
    public function ctrCrearRol() {
        if (isset($_POST["nuevoRol"]) && !empty($_POST["nuevoRol"])) {
            $tabla = "roles";
            $datos = ["nombre" => $_POST["nuevoRol"]];

            $respuesta = ModeloRoles::mdlCrearRol($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                        Swal.fire({
                          icon: "success",
                          title: "¡El rol ha sido agregado correctamente!",
                          showConfirmButton: false,
                          timer: 1500
                        }).then(() => {
                          window.location = "index.php?route=configuracionUsuario";
                        });
                      </script>';
            } else {
                echo '<script>
                        Swal.fire({
                          icon: "error",
                          title: "Error al agregar rol",
                          showConfirmButton: true
                        });
                      </script>';
            }
        }
    }

    /* ==============================
       EDITAR ROL
    ============================== */
    public function ctrEditarRol() {
        if (isset($_POST["editarRol"]) && !empty($_POST["editarRol"])) {
            $tabla = "roles";
            $datos = [
                "id" => $_POST["idRol"],
                "nombre" => $_POST["editarRol"]
            ];

            $respuesta = ModeloRoles::mdlEditarRol($tabla, $datos);

            return $respuesta;
        }
    }

    /* ==============================
       ELIMINAR ROL
    ============================== */
    public function ctrEliminarRol() {
        if (isset($_POST["idRolEliminar"])) {
            $tabla = "roles";
            $respuesta = ModeloRoles::mdlEliminarRol($tabla, $_POST["idRolEliminar"]);

            return $respuesta;
        }
    }
}

<?php
require_once "modelos/ModeloRoles.php";

class ControladorRoles {

    /* ==============================
       MOSTRAR ROLES
    ============================== */
    public static function ctrMostrarRoles() {
        $tabla = "roles";
        return ModeloRoles::mdlMostrarRoles($tabla);
    }

    /* ==============================
       CREAR ROL
    ============================== */
    public function ctrCrearRol() {
        if (!empty($_POST["nombre_rol"])) {
            $nombreRol = trim($_POST["nombre_rol"]);
            $respuesta = ModeloRoles::mdlCrearRol($nombreRol);

            $_SESSION["mensaje"] = $respuesta == "ok"
                ? ["tipo" => "success", "texto" => "Rol creado correctamente"]
                : ["tipo" => "danger", "texto" => "Error al crear el rol"];
        }
        header("Location: index.php?route=configuracionRoles");
        exit;
    }

    /* ==============================
       EDITAR ROL
    ============================== */
    public function ctrEditarRol() {
        if (!empty($_POST['idRol']) && !empty($_POST['editarRol'])) {
            $tabla = "roles";
            $datos = [
                "id" => $_POST['idRol'],
                "nombre" => trim($_POST['editarRol'])
            ];

            $respuesta = ModeloRoles::mdlEditarRol($tabla, $datos);

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
            } else {
                echo '<script>
                    Swal.fire({
                      icon: "error",
                      title: "Error al actualizar rol",
                      showConfirmButton: true
                    });
                  </script>';
            }
        }
    }

    /* ==============================
       ELIMINAR ROL
    ============================== */
    public function ctrEliminarRol() {
        if (!empty($_POST["idRolEliminar"])) {
            $tabla = 'roles';
            $id = intval($_POST["idRolEliminar"]);
            $respuesta = ModeloRoles::mdlEliminarRol($tabla, $id);

            $status = $respuesta == "ok" ? "rol_eliminado" : "error_eliminar";
            header("Location: index.php?route=configuracionUsuario&status=$status");
            exit();
        }

        header("Location: index.php?route=configuracionUsuario&status=sin_datos");
        exit();
    }
}

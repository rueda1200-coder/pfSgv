
<?php
class ControladorUsuarios {

    /* ==============================
       REGISTRAR USUARIO RECEPCIONISTA
    ============================== */
    public static function ctrRegistrarUsuario($datos) {
        if (!empty($datos['nombre']) && !empty($datos['usuario']) && !empty($datos['clave']) && !empty($datos['rol_id'])) {
            
            $tabla = 'usuarios';
            $datosInsert = [
                'nombre'   => $datos['nombre'],
                'usuario'  => $datos['usuario'],
                'clave'    => password_hash($datos['clave'], PASSWORD_BCRYPT),
                'rol_id'   => $datos['rol_id'],
                'creado_por' => $_SESSION["id_usuario"] ?? null
            ];

            $respuesta = ModeloUsuarios::mdlRegistrarUsuario($tabla, $datosInsert);

            if ($respuesta == "ok") {
                echo '<div class="alert alert-success text-center">✅ Usuario registrado correctamente.</div>';
            } else {
                echo '<div class="alert alert-danger text-center">❌ Error al registrar usuario.</div>';
            }
        }
    }

    /* ==============================
       MOSTRAR USUARIOS
    ============================== */
    public static function ctrMostrarUsuarios() {
        $tabla = "usuarios";
        return ModeloUsuarios::mdlMostrarUsuarios($tabla);
    }

    /* ==============================
       CREAR USUARIO (desde formulario)
    ============================== */
    public function ctrCrearUsuario() {
        if (isset($_POST["nuevoNombre"], $_POST["nuevoUsuario"], $_POST["nuevoRol"])) {

            if (!empty($_POST["nuevoNombre"]) && !empty($_POST["nuevoUsuario"]) && !empty($_POST["nuevoRol"])) {

                $tabla = "usuarios";

                $clave = !empty($_POST["nuevaClave"]) 
                    ? password_hash($_POST["nuevaClave"], PASSWORD_BCRYPT)
                    : null;

                $datos = [
                    "nombre"    => $_POST["nuevoNombre"],
                    "usuario"   => $_POST["nuevoUsuario"],
                    "clave"     => $clave,
                    "rol_id"    => $_POST["nuevoRol"],
                    "creado_por"=> $_SESSION["id_usuario"] ?? null
                ];

                $respuesta = ModeloUsuarios::mdlCrearUsuario($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                            Swal.fire({
                              icon: "success",
                              title: "¡El usuario ha sido agregado correctamente!",
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
                              title: "Error al agregar usuario",
                              showConfirmButton: true
                            });
                          </script>';
                }
            }
        }
    }

    /* ==============================
       EDITAR USUARIO
    ============================== */
    public function ctrEditarUsuario() {
        if (isset($_POST["editarNombre"], $_POST["idUsuario"])) {
            
            $tabla = "usuarios";
            $datos = [
                "id"      => $_POST["idUsuario"],
                "nombre"  => $_POST["editarNombre"],
                "usuario" => $_POST["editarUsuario"],
                "rol_id"  => $_POST["editarRol"]
            ];

            if (!empty($_POST["editarClave"])) {
                $datos["clave"] = password_hash($_POST["editarClave"], PASSWORD_BCRYPT);
            } else {
                $datos["clave"] = null;
            }

            return ModeloUsuarios::mdlEditarUsuario($tabla, $datos);
        }
    }

    /* ==============================
       ELIMINAR USUARIO
    ============================== */
    public function ctrEliminarUsuario() {
        if (isset($_POST["idUsuarioEliminar"])) {
            $tabla = "usuarios";
            return ModeloUsuarios::mdlEliminarUsuario($tabla, $_POST["idUsuarioEliminar"]);
        }
    }
}
?>

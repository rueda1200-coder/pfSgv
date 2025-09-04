<?php
class ControladorUsuarios {

    public static function ctrRegistrarUsuario($datos) {
        if (!empty($datos['nombre']) && !empty($datos['usuario']) && !empty($datos['clave']) && !empty($datos['rol_id'])) {
            
            $tabla = 'usuarios';
            $datosInsert = [
                'nombre' => $datos['nombre'],
                'usuario' => $datos['usuario'],
                'clave' => password_hash($datos['clave'], PASSWORD_BCRYPT),
                'rol_id' => $datos['rol_id']
            ];

            $respuesta = ModeloUsuarios::mdlRegistrarUsuario($tabla, $datosInsert);

            if ($respuesta == "ok") {
                echo '<div class="alert alert-success text-center">✅ Usuario Recepcionista registrado correctamente.</div>';
            } else {
                echo '<div class="alert alert-danger text-center">❌ Error al registrar usuario.</div>';
            }
        }
    }
}
?>
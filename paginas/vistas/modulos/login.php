<?php
require_once "controladores/login.controlador.php";
ControladorLogin::ctrIniciarSesion();
?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-header text-center">
          <h4>Iniciar Sesión</h4>
        </div>
        <div class="card-body">
          <form method="POST" action="index.php?route=login&action=verify">
            <div class="form-group mb-3">
              <label for="usuario">Usuario</label>
              <input type="text" name="usuario" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label for="clave">Contraseña</label>
              <input type="password" name="clave" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

   <div class="pagetitle">
  <h1>Inicio</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">

  <div class="row"></div>
   <!-- Bienvenida -->
    <div class="col-12">
      <div class="card border-primary shadow-sm">
        <div class="card-body">
          <h5 class="card-title text-primary">Bienvenido, <?php echo $_SESSION["user_name"] ?? "Usuario"; ?>!</h5>
          <p class="card-text">Selecciona una opción del menú lateral para comenzar.</p>
        </div>
      </div>
    </div>

</section>

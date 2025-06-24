<div class="pagetitle">
  <h1>Inicio</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">

  <div class="row">

    <!-- Bienvenida -->
    <div class="col-12">
      <div class="card border-primary shadow-sm">
        <div class="card-body">
          <h5 class="card-title text-primary">Bienvenido, <?php echo $_SESSION["user_name"] ?? "Usuario"; ?>!</h5>
          <p class="card-text">Selecciona una opción del menú lateral para comenzar.</p>
        </div>
      </div>
    </div>

    <!-- Intro del sistema -->
    <div class="col-12">
      <div class="card bg-light">
        <div class="card-body">
          <section class="intro text-center py-3">
            <h2 class="fw-bold">Bienvenido a nuestro Sistema Administrativo Veterinario</h2>
            <p class="lead">Gestiona de manera eficiente la información de tus pacientes, historial clínico y proveedores en un solo lugar.</p>
          </section>
        </div>
      </div>
    </div>

  </div>

</section>

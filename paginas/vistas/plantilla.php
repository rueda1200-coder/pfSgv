<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Proyecto Veterinario</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700"
    rel="stylesheet">

  <!-- CSS principal de tu proyecto -->
  <link href="vistas/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php include "modulos/header.php"; ?>

  <?php if (isset($_SESSION['usuario'])): ?>
    <?php include "modulos/sidebar.php"; ?>
  <?php endif; ?>

  <?php include "modulos/main.php"; ?>

  <?php include "modulos/footer.php"; ?>

  <!-- Botón scroll up -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- ================== JS ================== -->

  <!-- Bootstrap Bundle con Popper (necesario para modales, dropdowns, etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- TinyMCE -->
  <script src="vistas/assets/vendor/tinymce/js/tinymce/tinymce.min.js"></script>

  <!-- JS principal de tu proyecto -->
  <script src="vistas/assets/js/main.js"></script>

</body>
</html>

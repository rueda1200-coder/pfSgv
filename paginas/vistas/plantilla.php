

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Proyecto Veterinario</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vistas/assets/img/favicon.png" rel="icon">
  <link href="vistas/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vistas/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vistas/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Main CSS -->
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

<!-- Bootstrap Bundle -->
<script src="vistas/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- TinyMCE -->
<script src="vistas/assets/vendor/tinymce/tinymce.min.js"></script>

<!-- Main JS -->
<script src="vistas/assets/js/main.js"></script>






</body>

</html>
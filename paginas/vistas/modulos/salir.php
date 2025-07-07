<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_unset();
session_destroy();

// Redirecciona utilizando la ruta base esperada
header("Location: index.php?route=home");
exit;

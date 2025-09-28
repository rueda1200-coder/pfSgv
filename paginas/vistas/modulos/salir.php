<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_unset();
session_destroy();

// Redirige al login después de cerrar sesión
header("Location: index.php?route=login");
exit;

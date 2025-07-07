
<?php
if ($_SESSION["rol"] !== "Administrador") {
    echo "Acceso restringido.";
    exit;
}

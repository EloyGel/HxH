<?php
if ((session_status() == PHP_SESSION_ACTIVE) && (session_id() != '')) {
    session_unset();
    session_destroy();
}

include_once('Model/Funciones.php');

$fun = new Funciones();
echo $fun->Index();
?> 
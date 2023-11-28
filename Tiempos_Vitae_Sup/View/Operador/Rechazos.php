<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'operador'); 
$_SESSION['vitae']['TIME'] = time();
echo $fun->header(2,'Ope');
echo $fun->Rechazo('Ope');
?>

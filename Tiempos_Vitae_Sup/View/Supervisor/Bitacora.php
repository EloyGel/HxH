<?php
session_start();
error_reporting(1);
 
include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'supervisor');
$_SESSION['vitae']['TIME'] = time();
echo $fun->header(3,'Sup');
echo $fun->Bitacora('supervisor');
?>
 
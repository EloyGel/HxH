<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'admin');
$_SESSION['vitae']['TIME'] = time();
echo $fun->header(1,'Admin');
echo $fun->HxH('Admin');
?>
 
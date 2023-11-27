<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'admin');
echo $fun->header(2,'Admin');
echo $fun->Rechazo('Admin');
?> 
 
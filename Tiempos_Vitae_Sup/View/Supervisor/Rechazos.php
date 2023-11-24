<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');
 
$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'supervisor');
echo $fun->header(2,'Sup');
echo $fun->Rechazo('Sup');
?> 

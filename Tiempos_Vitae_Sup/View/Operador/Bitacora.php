﻿<?php
session_start();
error_reporting(1);

if($_SESSION['vitae']['PERFIL'] != null || $_SESSION['vitae']['PERFIL'] !=''){
  if($_SESSION['vitae']['PERFIL'] == 'admin' || $_SESSION['vitae']['PERFIL'] == 'supervisor' || $_SESSION['vitae']['PERFIL'] == 'operador'){
   //echo '<script language="javascript">alert("Bienvenido");</script>';
  }
  else
  { echo 'No cuentas con permisos'; die(); }
 }
 else
 { echo 'No cuentas con autorización'; die(); }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Ventana de configuración</title>
  <link rel = "icon" href="../../img/timer.ico" type="image / x-icon">
  <link rel="preload" href="../../css/normalize.css" as="style">
  <link href="../../css/normalize.css" rel="stylesheet"> <!--Normalize-->
  <link rel="preconnect" href="https://use.typekit.net">
  <link rel="stylesheet" href="https://use.typekit.net/qmu2qyo.css"><!--Fuente Myriad pro-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> <!--Fuente Monyserrat sans-->
  <link rel="preload" href="../../css/styles.css" as="style">
  <link href="../../css/styles.css" rel="stylesheet"> <!--Hoja de estilos-->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>

<header>
  <div class="logo"> 
    <section class="logo-T">
        <a href="../../index.php">
          <picture>
            <source srcset="../../img/logo_vitae_N.png" type="image/png" alt="Vitae">
            <img class="logo-tomza" src="../../img/logo_vitae_N.png" alt="Vitae">
          </picture>
        </a>  
    </section>

  </div>
</header> 

<!--Barra de navegacion-->
<div class="nav-bg"> 
  <nav class="navegacion-principal contenedor">
    <a href="HxH.php">Registro</a>
    <a href="Bitacora.php">Bitacora</a>
    <a href="Rechazos.php">Rechazos</a>
  </nav>
</div> 

<div class="grid-container">
 <h1>Registros del día <span id="fechaActual"></span></h1>
</div>

<div class="contenedor grid-container">
  <table id="Hora" class="grid-text display table grid-item" >
    <thead>
      <tr>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th>OT</th>
        <th>Lote</th>
        <th>Producto</th>
        <th>Maquina</th>
        <th>Estatus</th>
        <th>Turno</th>
        <th>Estatus</th>
        <th>Nivel 1</th>
        <th>Nivel 2</th>
        <th>Nivel 3</th>
        <th>Nivel 4</th>
        <th>Piezas</th>
        <th>Lider</th>
        <th>Supervisor</th>
        <th>Sucursal</th>
      </tr>
    </thead>
      <tbody>

      </tbody>
  </table>
</div>

<footer class="contenedor derechos">   
  <a href="https://github.com/eloyradilla95" target="_black">
    <p class="eradilla"> #PPCDSALVC</p>
  </a>
</footer>

<script src="../../js/library/modernizr.js"></script>
<script src="../../js/library/animacion-index.js"></script> 
<script src="../../js/library/jquery-3.7.0.js"></script>
<script src="../../js/library/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="../../js/grid.js"></script>
<script src="../../js/fecha.js"></script>


<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>-->





</body>
</html>
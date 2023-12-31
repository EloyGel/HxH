﻿<?php
session_start();
error_reporting(1);

$ses = $_SESSION['vitae'];

if($ses != null || $ses !=''){
 if($ses == 'admin' || $ses =='supervisor'){
  //echo '<script language="javascript">alert("Bienvenido");</script>';
 }
 else
 {
  echo 'No cuentas con permisos';
  die();
 }
}
else
{
  echo 'No cuentas con autorización';
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Ventana de configuración</title>
    <link rel = "icon" href="../img/timer.ico" type="image / x-icon">
    <link rel="preload" href="../css/normalize.css" as="style">
    <link href="../css/normalize.css" rel="stylesheet"> <!--Normalize-->
    <link rel="preconnect" href="https://use.typekit.net">
    <link rel="stylesheet" href="https://use.typekit.net/qmu2qyo.css"><!--Fuente Myriad pro-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> <!--Fuente Monyserrat sans-->
    <link rel="preload" href="../css/styles.css" as="style">
    <link href="../css/styles.css" rel="stylesheet"> <!--Hoja de estilos-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community@27.1.1/styles/ag-grid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community@27.1.1/styles/ag-theme-alpine.css"> -->

</head>
<body>

<header>
  <div class="logo"> 
    <section class="logo-T">
        <a href="/">
          <picture>
            <source srcset="../img/logo_vitae_N.png" type="image/png" alt="Vitae">
            <img class="logo-tomza" src="../img/logo_vitae_N.png" alt="Vitae">
          </picture>
        </a>  
    </section>

  </div>
</header> 

<!--Barra de navegacion-->
<div class="nav-bg"> 
  <nav class="navegacion-principal contenedor">
      <a href="Supervisor.php">Inicio</a>
      <a href="Catalagos.php">Cátalago</a>
      <a href="Catalagos.php">Historico</a> 
  </nav>
</div> 

<div>
 <h1>Registros</h1>
  <form action="Filtro">
   <input type="text" id="fechaInicio" placeholder="Fecha de Inicio">
   <input type="text" id="fechaFin" placeholder="Fecha Final">
   <select name="estatus" id="filtroEstatus">
    <option selected disabled value="">Estatus</option>
     <option value="setup">SETUP</option>
     <option value="proceso">PROCESO</option>
     <option value="paro">PARO</option>
     <option value="fin">FIN</option>
   </select>
   <select class="form-control" name="producto" id="filtroProducto" required>   
     <?php
      include_once('../Model/Funciones.php');

      $fun = new Funciones();
      echo $fun->obtenerProducto();
      ?>
    </select>
   <input type="text" id="filtroLote" placeholder="Filtrar por Lote">
   <input type="text" id="filtroOT" placeholder="Filtrar por OT">
   <select class="form-control" name="area" id="filtroArea" required>
     <?php
      include_once('../Model/Funciones.php');

      $fun = new Funciones($con);
      echo $fun->obtenerArea();
     ?>
    </select>
    <select class="form-control" name="turno" id="turno" required>
     <option selected disabled value="">TURNO</option>
       <option value="MATUTINO">MATUTINO</option>
       <option value="VESPERTINO">VESPERTINO</option>
       <option value="NOCTURNO">NOCTURNO</option>
    <select>
   <button id="btnFiltrar" class="boton">Buscar</button>
  </form>
</div>


<div class="grid-container">
  <table id="Hora" class="display">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Estatus</th>
        <th>Producto</th>
        <th>Lote</th>
        <th>OT</th>
        <th>Area</th>
        <th>Lider</th>
        <th>Supervisor</th>
        <th>Turno</th>
      </tr>
    </thead>
      <tbody>

      </tbody>
  </table>
</div>

<!-- <table id="Hora" class="display">
    <thead>

    </thead>
    <tbody>

    </tbody>
</table> -->

<!--<div id="myGrid" style="height: 500px;" class="ag-theme-alpine"></div>-->

<footer class="contenedor derechos">   
  <a href="https://github.com/eloyradilla95" target="_black">
    <p class="eradilla"> #PPCDSALVC</p>
  </a>
</footer>

<script src="../js/modernizr.js"></script>
<script src="../js/animacion-index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/grid.js"></script>

<!--<script src="https://cdn.jsdelivr.net/npm/ag-grid-community@27.1.1/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/ag-grid-community@27.1.1/grid/polyfills.js"></script>
<script src="../js/Ag-Grid.js"></script>-->

</body>
</html>
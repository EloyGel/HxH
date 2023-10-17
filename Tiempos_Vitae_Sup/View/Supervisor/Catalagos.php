<?php
session_start();
error_reporting(1);

if($_SESSION['vitae']['PERFIL'] != null || $_SESSION['vitae']['PERFIL'] !=''){
 if($_SESSION['vitae']['PERFIL'] == 'admin' || $_SESSION['vitae']['PERFIL'] =='supervisor'){
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community@27.1.1/styles/ag-grid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community@27.1.1/styles/ag-theme-alpine.css"> -->

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
      <a href="Supervisor.php">Inicio</a>
      <a href="Catalagos.php">Cátalago</a>
      <a href="Catalagos.php">Historico</a> 
  </nav>
</div> 

<h1>Catalagos</h1>

<div class="grid-contenedor">

 <div class="grid-container">
  <input type="text" id="" placeholder="Nuevo Motivo de paro">
  <button id="Motivo1" class="boton">Guardar</button>
   <table id="M1" class="display">
    <thead>
      <tr>
        <th>Motivo</th>
      </tr>
    </thead>
      <tbody>

      </tbody>
   </table>
  </div>

 <div class="grid-container">
  <input type="text" id="" placeholder="Nuevo SETUP">
   <button id="Motivo2" class="boton">Guardar</button>
    <table id="M2" class="display">
     <thead>
      <tr>
        <th>Motivo</th>
      </tr>
     </thead>
      <tbody>

      </tbody>
  </table>
 </div>

</div>



<footer class="contenedor derechos">   
  <a href="https://github.com/eloyradilla95" target="_black">
    <p class="eradilla"> #PPCDSALVC</p>
  </a>
</footer>

<script src="../js/modernizr.js"></script>
<!-- <script src="../js/animacion-index.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="../../js/catalago.js"></script>

</body>
</html>
<?php
session_start();
error_reporting(1);

$ses = $_SESSION['vitae'];

if($ses != null || $ses !=''){
 if($ses == 'admin'){
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
    <title>Panel de control</title>
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
      <a href="Catalagos.php">Catalogos</a>
      <a href="Catalagos.php">Historico</a> 
  </nav>
</div> 
 <div class="logo">
    <h1>Menú principal</h1>
    <button href = "../../View/Operador/HxH.php" class="boton BotonAdmin" id="boton1">Operador</button>
    <button href = "../../View/Supervisor/Supervisor.php" class="boton BotonAdmin" id="boton2">Supervisor</button>
    <button href = "../../View/Reporte.php" class="boton BotonAdmin" id="boton3">Reporte</button>
 </div>
 <script>
        document.getElementById("boton1").addEventListener("click", function() {
            window.location.href = "../../View/Operador/HxH.php";
        });

        document.getElementById("boton2").addEventListener("click", function() {
            window.location.href = "../../View/Supervisor/Supervisor.php";
        });

        document.getElementById("boton3").addEventListener("click", function() {
            window.location.href = "../../View/Reporte.php";
        });
    </script>
</body>
</html>
<?php
session_start();
error_reporting(1);

$ses = $_SESSION['vitae'];

if($ses != null || $ses !=''){
 if($ses == 'admin' || $ses =='supervisor'){
  echo '<script language="javascript">alert("Bienvenido");</script>';
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
      <a href="/">Inicio</a>
      <a href="nosotros">Reportes</a>
      <a href="estaciones">Cátalago</a> 
      <a href="contacto">Contacto</a>
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
    <option selected disabled value="">Filtrar por Producto</option>    
     <?php
      include_once('../Model/Funciones.php');

      $fun = new Funciones();
      $data = $fun->obtenerProducto();
      foreach ($data as $valores):
       echo '<option value="'.$valores["rowid"].'">'.iconv("ISO-8859-1","UTF-8", $valores["description"]).'</option>';
      endforeach;
      ?>
    </select>
   <input type="text" id="filtroLote" placeholder="Filtrar por Lote">
   <input type="text" id="filtroOT" placeholder="Filtrar por OT">
   <select class="form-control" name="area" id="filtroArea" required>
    <option selected disabled value="">Selecciona una área</option> 
     <?php
      include_once('../Model/Funciones.php');

      $fun = new Funciones($con);
      $data = $fun->obtenerArea();
      foreach ($data as $valores):               
        echo '<option value="'.$valores["id"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
      endforeach;
     ?>
    </select>
    <select class="form-control" name="turno" id="turno" required>
     <option selected disabled value="">TURNO</option>
       <option value="MATUTINO">MATUTINO</option>
       <option value="VESPERTINO">VESPERTINO</option>
       <option value="NOCTURNO">NOCTURNO</option>
    <select>
   <button id="btnFiltrar">Buscar</button>
  </form>
</div>

<!--Grid-->
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
            <!-- Los datos se cargarán aquí a través de AJAX -->
        </tbody>
    </table>
</div>

<footer class="contenedor derechos">
    
    <a href="https://github.com/eloyradilla95" target="_black">
       <p class="eradilla"> #PPCDSALVC</p>
    </a>

</footer>

<script src="../js/modernizr.js"></script>
<script src="../js/animacion-index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BPV0Z6HBPE"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(document).ready(function() {
    // Inicializar Datepicker en los campos de filtro de fecha
    $("#fechaInicio").datepicker();
    $("#fechaFin").datepicker();

    var table = $('#Hora').DataTable({
        "ajax": {
          "url": "../Model/Funciones.php", // Ruta al archivo que contiene las funciones
            "type": "POST",
            "data": {
                "action": "obtenerData" // Acción para identificar la función que se debe llamar en Funciones.php
            },
            "dataType": "json",
            "dataSrc": "" // Dejar esto en blanco para indicar que los datos ya están en el formato correcto
        },
        "columns": [
            { "data": "Fecha" },
            { "data": "Estatus" },
            { "data": "Producto" },
            { "data": "Lote" },
            { "data": "OT" },
            { "data": "AREA" },
            { "data": "Lider" },
            { "data": "Supervisor" },
            { "data": "Turno" }
        ]
    });

    // Manejar el clic en el botón de filtrar
    $('#btnFiltrar').on('click', function() {
        var fechaInicio = $("#fechaInicio").datepicker("getDate");
        var fechaFin = $("#fechaFin").datepicker("getDate");
        var filtroEstatus = $('#filtroEstatus').val();
        var filtroProducto = $('#filtroProducto').val();
        var filtroLote = $('#filtroLote').val();
        var filtroOT = $('#filtroOT').val();
        var filtroArea = $('#filtroArea').val();
        var filtroLider = $('#filtroLider').val();
        var filtroSupervisor = $('#filtroSupervisor').val();
        var filtroTurno = $('#turno').val();

        // Aplicar los filtros
        table.column(0).search(fechaInicio + ' to ' + fechaFin).draw();
        table.columns(1).search(filtroEstatus).draw();
        table.columns(2).search(filtroProducto).draw();
        table.columns(3).search(filtroLote).draw();
        table.columns(4).search(filtroOT).draw();
        table.columns(5).search(filtroArea).draw();
        table.columns(6).search(filtroLider).draw();
        table.columns(7).search(filtroSupervisor).draw();
        table.columns(8).search(filtroTurno).draw();
    });
   });
    </script>

</body>
</html>
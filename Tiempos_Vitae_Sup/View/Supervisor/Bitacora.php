﻿<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'supervisor');
echo $fun->header('Bitacora');
?>
 
<!--Barra de navegacion-->
<div class="nav-bg"> 
  <nav class="navegacion-principal contenedor">
    <a href="HxH.php">Registro</a>
    <a href="Rechazos.php">Rechazos</a>
    <a href="Bitacora.php">Bitacora</a>
    <a href="Reporte.php">Reporte</a>
  </nav>
</div> 

<div class="grid-container">
 <h1>Registros del día <span id="fechaActual"></span></h1>
</div>

<div class="contenedor grid-container">
  <div class="divbtn" id="guardar">
    <input type="submit" class="button-6" name="guardar" value="Exportar">
  </div>
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
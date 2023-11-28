<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'supervisor');
$_SESSION['vitae']['TIME'] = time();
echo $fun->header(4,'Sup');
?> 

<div class="grid-container">
 <h1>Horas no registradas</h1> <!-- <span id="fechaActual"></span> -->
</div>

<div class="contenedor grid-container">
  <div class="divbtn" id="guardar">
    <input type="submit" class="button-6" name="guardar" value="Exportar">
  </div>
  <table id="Hora" class="grid-text display table grid-item" data-archivo="tiempos">
    <thead>
      <tr>
        <th>Máquina</th>
        <th>Hora no reportada</th>
      </tr>
    </thead>
      <tbody>

      </tbody>
  </table>
</div>

<!--
<script src="../../js/library/modernizr.js"></script>
<script src="../../js/library/animacion-index.js"></script> 
<script src="../../js/library/jquery-3.7.0.js"></script>
<script src="../../js/library/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<script src="https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"></script>


<script src="../../js/grid.js"></script>
<script src="../../js/fecha.js"></script>





</body>
</html>
<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'admin');
echo $fun->header(1,'Admin');
?>
 
<div class="contenedor grid-container">
  <div class="divbtn" id="guardar"> 
    <form action="../../View/Admin/AddPersonal.php" method="POST">
      <button type="submit" class="button-6" name="add" value="Agregar">Agregar</button>
    </form>
  </div>
  <table id="Hora" class="grid-text display table grid-item" data-archivo="personal">
    <thead>
      <tr> 
        <th>ANTEFIRMA</th>
        <th>NOMBRE</th>
        <th>PUESTO</th>
        <th>EMPRESA</th>
        <th>SUCURSAL</th>
      </tr>
    </thead>
      <tbody>

      </tbody>
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js?v=1.0"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js?v=1.0"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js?v=1.0"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js?v=1.0"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js?v=1.0"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js?v=1.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js?v=1.0"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css?v=1.0">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css?v=1.0">

<script src="https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json?v=1.0"></script>


<script src="../../js/library/modernizr.js?v=1.0"></script>
<script src="../../js/library/animacion-index.js?v=1.0"></script> 

<script src="../../js/grid.js?v=1.0"></script>


</body>
</html>
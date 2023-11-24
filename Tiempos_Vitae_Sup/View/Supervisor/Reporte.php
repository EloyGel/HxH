<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'supervisor');
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
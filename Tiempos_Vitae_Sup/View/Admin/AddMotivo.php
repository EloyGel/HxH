<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'admin'); 
$_SESSION['vitae']['TIME'] = time();

if(!isset($_POST['add'])){
  header("location:/Tiempos_Vitae_Sup/View/error.html");
}

echo $fun->header(5,'Admin');
?>
 
  <main role="main" class="">
    <div class="contenedor sombra">
     <p class="f1">Agregar nuevo motivo</p>
      <form class="" method="post" id="formulario" action="../../Controller/Catalagos.php">
        <div class="div" id="maquina">
          <label class="f2" for="maquina">MAQUINA</label>
          <select class="s1" name="maquina" id="maquina" required>
            <?php
            include_once('../../Model/Funciones.php');

            $fun = new Funciones();
            echo $fun->obtenerArea();
            ?>
          </select>
        </div> 
        <div class="div">
          <label class="f2" for="sucursal">Motivo</label>
            <select class="s1" name="motivos" id="motivos" required>
              <option selected disabled value="">Selecciona un motivo</option>
              <option value="PARO">PARO</option>
              <option value="SETUP">SETUP</option> 
              <option value="RECHAZO">RECHAZO</option> 
            </select>
        </div>
        <div id="n1">
          <div class="div" >
            <label class="f2" for="n1">Nivel 1</label>
            <input type="Text" maxlength="200" name="n1" id="n1" class="t1" required placeholder="Escribe el nivel 1 del motivo">
          </div>
        </div>
        <div id="n2">
          <div class="div" >
            <label class="f2" for="n2">Nivel 2</label>
            <input type="Text" maxlength="200" name="n2" id="n2" class="t1"  placeholder="Escribe el nivel 2 del motivo">
          </div>
        </div>
        <div id="n3">
          <div class="div" >
            <label class="f2" for="n3">Nivel 3</label>
            <input type="Text" maxlength="200" name="n3" id="n3" class="t1"  placeholder="Escribe el nivel 3 del motivo">
          </div>
        </div>
        <div id="n4">
          <div class="div" >
            <label class="f2" for="n4">Nivel 4</label>
            <input type="Text" maxlength="200" name="n4" id="n4" class="t1"  placeholder="Escribe el nivel 4 del motivo">
          </div>
        </div>
<!------------------------------------------------------------------------ Botón de guardar ------------------------------------------------------------------->
        <div class="divbtn" id="motivo">
          <input type="submit" class="button-6" name="motivo" value="Guardar">
        </div>
      </form> 
      </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <script src="../../js/div.js"></script> 
    <!--<script src="../../js/combobox.js"></script> Combobox dinamico -->
    <!--<script src="../../js/fecha.js"></script> Fecha -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


  </body>
</html>
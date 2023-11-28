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

echo $fun->header(6,'Admin');
?>
 
  <main role="main" class="">
    <div class="contenedor sombra">
     <p class="f1">Vitae Acondicionamiento <span id="fechaActual"></span></p>
      <form class="" method="post" id="formulario" action="../../Controller/Catalagos.php">
        <div class="div">
          <label class="f2" for="antefirma">ANTEFIRMA</label>
          <input type="Text" maxlength="45" required name="ante" class="t1" id="ante" placeholder="Escribe la antefirma">
        </div>
        <div class="div">
          <label class="f2" for="nombre">NOMBRE</label>
          <input type="Text" maxlength="200" required name="nombre" class="t1" id="ante" placeholder="Escribe el nombre">
        </div>
        <div class="div">
          <label class="f2" for="empresa">EMPRESA</label>
            <select class="s1" name="empresa" id="empresa" required>
              <option value="2">Vitae laboratorios</option>
            </select>
        </div>
        <div class="div">
          <label class="f2" for="sucursal">SUCURSAL</label>
            <select class="s1" name="sucursal" id="sucursal" required>
              <option value="1">Technology park</option>
              <option value="2">Euclides</option> 
            </select>
        </div>
        <div class="div">
          <label class="f2" for="puesto">PUESTO</label>
            <select class="s1" name="puesto" id="puesto" required>
              <option value="LIDER">Lider</option>
              <option value="SUPERVISOR">Supervisor</option> 
            </select>
        </div>
          <!------------------------------------------------------------------------ Botón de guardar ----------------------------------------------------------->
        <div class="divbtn" id="personal">
          <input type="submit" class="button-6" name="personal" value="Guardar">
        </div>
      </form> 
      </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!--<script src="../../js/div.js"></script> Ocultar Div -->
    <!--<script src="../../js/combobox.js"></script> Combobox dinamico -->
    <!--<script src="../../js/fecha.js"></script> Fecha -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


  </body>
</html>
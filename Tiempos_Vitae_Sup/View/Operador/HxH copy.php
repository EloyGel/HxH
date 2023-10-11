<?php
session_start();
error_reporting(1);

$ses = $_SESSION['vitae'];

if($ses != null || $ses !=''){
 if($ses == 'admin' || $ses =='supervisor' || $ses =='operador'){
  //echo '<script language="javascript">alert("Bienvenido");</script>';
 }
 else
 { echo 'No cuentas con permisos'; die(); }
}
else
{ echo 'No cuentas con autorización'; die(); }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../img/timer.ico">
    <title>HxH</title>
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/navbar-top-fixed.css" rel="stylesheet"> 
    <link href="../../css/styles.css" rel="stylesheet"> <!--Hoja de estilos-->


  </head>

  <body>
    <!--
    <div class="container">
      <nav class="navbar navbar-expand-sm  fixed-top navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo_vitae_N.png" alt="" height="80px">
          </a>
        </div> 
      </nav>
    </div>
    -->
    <div class="encabezado fixed-top container">
      <a class="navbar-brand d-flex justify-content-center" href="#">
        <img src="../../img/logo_vitae_N.png" alt="" height="100px">
      </a>
    </div>
    <br/><br/>
    <main role="main" class="container">
      
    <div class="nav-bg"> 
      <nav class="navegacion-principal contenedor">
        <a href="Supervisor.php">Inicio</a>
        <a href="Catalagos.php">Cátalago</a>
        <a href="Catalagos.php">Historico</a> 
      </nav>
    </div>
      <div class="jumbotron overflow-auto" >
        <h1>Vitae Acondicionamiento</h1>
        <p></p>
        <form class="form-group" method="post" id="formulario" action="../Controller/Principal.php">
          <div class="form-group">
           <label for="Fechaini">Fecha inicio</label>
           <input type="date" id="fechaini" name="fechaini"/>

           <label for="Fechafin">Fecha fin</label>
           <input type="date" id="fechafin" name="fechafin"/>
          </div>
          <div class="form-group">
            <label for="sucursal">SUCURSAL</label>
            <select class="form-control" name="sucursal" id="sucursal" required>
              <option selected disabled value="">Selecciona una opción</option>
              <option value="1">Technology park</option>
              <option value="2">Euclides</option> 
            </select>
          </div>
          <div class="form-group">
           <label for="area">AREA</label>
           <select class="form-control" name="area" id="area" required>
            <?php
            include_once('../../Model/Funciones.php');

            $fun = new Funciones();
            echo $fun->obtenerArea();
            ?>
           </select>
          </div>
          <div class="form-group">
            <label for="producto">PRODUCTO</label>
            <select class="form-control" name="producto" id="producto" required>
              <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerProducto();
              ?>
            </select>
          </div>
          <div class="form-group" id="OTsel" >
            <label for="ot">OT</label>
            <select class="form-control" name="ot" id="ot" required>
            <option selected disabled value="">Selecciona una OT</option>

            </select>
          </div> 
          <div class="form-group" id="lote">
           <label for="lote">LOTE</label>
           <input required type="text" class="form-control" name="lote1" id="lote1" >
          </div> 
          <div class="form-group">
            <label for="lider">LÍDER DE LÍNEA</label>
            <select class="form-control" name="lider" id="lider" required>
              <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerLider();
              ?>
            </select>
          </div> 
          <div class="form-group">
            <label for="supervisor">SUPERVISOR</label>
            <select class="form-control" name="supervisor" id="supervisor" required>
              <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerSupervisor();
              ?>
            </select>
          </div> 
          <div class="form-group">
            <label for="turno">TURNO</label>
            <select class="form-control" name="turno" id="turno" required>
              <option selected disabled value="">Selecciona una opción</option>
              <option value="MATUTINO">MATUTINO</option>
              <option value="VESPERTINO">VESPERTINO</option>
              <option value="NOCTURNO">NOCTURNO</option>
            <select>
          </div> 
          <div class="form-group">
            <label for="estatus">ESTATUS</label>
            <select class="form-control" name="estatus" id="estatus" required>
              <option selected disabled value="">Selecciona una opción</option>
              <option value="setup">SETUP</option>
              <option value="proceso">PROCESO</option>
              <option value="paro">PARO</option>
              <option value="fin">FIN DE TURNO</option>
            </select>
          </div>
          <!-------------------------------------------------------------------------- Informacion del setup --------------------------------------------------->
          <div class="form-group" id="setup">
            <label for="MotSetup">MOTIVO DE SETUP</label>
            <select class="form-control" name="motivo1" id="MotSetup">
              <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerSETUP();
              ?>
            </select>
            <p></p>
            <div class="form-group" id="inspector" >
              <label for="SetInspector">INSPECTOR</label>
              <input type="text" class="form-control" name="inspector" placeholder="Escribe tu respuesta">
            </div>
            <div class="form-group" id="observaciones1">
              <label for="SetObservaciones">OBSERVACIONES</label>
              <textarea class="form-control" name="observaciones1" id="SetObservaciones" placeholder="Escribe tu respuesta" rows="3"></textarea>
            </div> 
          </div>
          <!------------------------------------------------------------------------- Informacion del proceso ------------------------------------------------>
          <div class="form-group" id="proceso">
            <label for="TipoProceso">PROCESO</label>
            <select class="form-control" name="motivo2" id="TipoProceso">
              <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerProceso();
              ?>
            </select>
            <p></p>
            <div class="form-group" id="piezas">
              <label for="VelocidadMaquina">CANTIDAD DE PIEZAS</label>
              <input type="number" min="0" name="piezas" class="form-control" id="VelocidadMaquina" placeholder="Escribe tu respuesta">
            </div> 
            <div class="form-group" id="observaciones2">
              <label for="Procbservaciones">OBSERVACIONES</label>
              <textarea class="form-control" name="observaciones2" id="Procbservaciones" placeholder="Escribe tu respuesta" rows="3"></textarea>
            </div> 
          </div>
          <!------------------------------------------------------------------------ Informacion del paro ------------------------------------------------------>
          <div class="form-group" id="paro">
            <label for="MotParo">MOTIVO DEL PARO</label>
            <select class="form-control" name="motivo3" id="MotParo">
              <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerParo();
              ?>
            </select>
            <p></p>
            <div class="form-group">
              <label for="DesParo">DESCRIPCIÓN DEL PARO</label>
              <textarea class="form-control" name="descripcion3" id="DesParo" placeholder="Escribe tu respuesta" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="Parobservaciones">OBSERVACIONES</label>
              <textarea class="form-control" name="observaciones3" id="Parobservaciones" placeholder="Escribe tu respuesta" rows="3"></textarea>
            </div>  
          </div>
          <!---------------------------------------------------------------------- Informacion de fin de turno ------------------------------------------------->
          <div class="form-group" id="FinTurno">
            <label for="Turnobservaciones">OBSERVACIONES</label>
            <textarea class="form-control" name="observaciones4" id="Turnobservaciones" placeholder="Escribe tu respuesta" rows="3"></textarea>
          </div> 
          <div class="text-right form-group" id="guardar">
          <!------------------------------------------------------------------------ Botón de guardar ----------------------------------------------------------->
           <input type="submit" class="button-6" name="guardar" value="Guardar">

          </div>

          <!-- Informacion de fin de turno -->
        </form> 
      </div>
    </main>

    <!--
    <footer class="fixed-bottom footer container">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    -->
            <!-- Bootstrap core JavaScript-->
    <!--<script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/jquery-3.2.1.slim.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <script src="../../js/div.js"></script> <!--Ocultar Div -->
    <script src="../../js/combobox.js"></script> <!--Combobox dinamico -->
    <script src="../../js/fecha.js"></script> <!--Fecha -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script language="javascript"> //Combo Dinamico

    </script>

  </body>
</html>
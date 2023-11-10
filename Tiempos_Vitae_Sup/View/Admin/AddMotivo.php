<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'admin');

if(isset($_POST['add'])){
    //echo '<script language="javascript">alert("Bienvenido");</script>';
   }
   else
   {  
    header("location:/Tiempos_Vitae_Sup/View/error.html");
   } 
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
    <link href="../../css/styles.css" rel="stylesheet"> <!--Hoja de estilos-->

  </head>
  <body>
  <header>
  <div class="logo"> 
    <section class="logo-T">
        <a href="../../index.html">
          <picture>
            <source srcset="../../img/logo_vitae_N.png" type="image/png" alt="Vitae">
            <img class="logo-tomza" src="../../img/logo_vitae_N.png" alt="Vitae">
          </picture>
        </a>  
    </section>
   </div>
  </header> 
  <main role="main" class="">
    <div class="contenedor sombra">
     <p class="f1">Agregar nuevo motivo<span id="fechaActual"></span></p>
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
            <select class="s1" name="motivo" id="motivo" required>
              <option selected disabled value="">Selecciona un motivo</option>
              <option value="PARO">PARO</option>
              <option value="SETUP">SETUP</option> 
              <option value="RECHAZO">RECHAZO</option> 
            </select>
        </div>
        <div id="n1">
          <div class="div" >
            <label class="f2" for="n1">Nivel 1</label>
            <input type="Text" name="n1" class="t1"  placeholder="Escribe el nivel 1 del motivo">
          </div>
        </div>
        <div id="n2">
          <div class="div" >
            <label class="f2" for="n2">Nivel 2</label>
            <input type="Text" name="n2" class="t1"  placeholder="Escribe el nivel 2 del motivo">
          </div>
        </div>
        <div id="n3">
          <div class="div" >
            <label class="f2" for="n3">Nivel 3</label>
            <input type="Text" name="n3" class="t1"  placeholder="Escribe el nivel 3 del motivo">
          </div>
        </div>
        <div id="n4">
          <div class="div" >
            <label class="f2" for="n4">Nivel 1</label>
            <input type="Text" name="n4" class="t1"  placeholder="Escribe el nivel 4 del motivo">
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
    <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <script src="../../js/div.js"></script> 
    <!--<script src="../../js/combobox.js"></script> Combobox dinamico -->
    <!--<script src="../../js/fecha.js"></script> Fecha -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script language="javascript"> //Combo Dinamico

    </script>

  </body>
</html>
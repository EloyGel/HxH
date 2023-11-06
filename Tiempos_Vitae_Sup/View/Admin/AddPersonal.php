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
     <p class="f1">Vitae Acondicionamiento <span id="fechaActual"></span></p>
      <form class="" method="post" id="formulario" action="../../Controller/Personal.php">
        <div class="div">
          <label class="f2" for="antefirma">ANTEFIRMA</label>
          <input type="Text" name="ante" class="t1" id="ante" placeholder="Escribe la antefirma">
        </div>
        <div class="div">
          <label class="f2" for="nombre">NOMBRE</label>
          <input type="Text" name="nombre" class="t1" id="ante" placeholder="Escribe el nombre">
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
              <option value="1">Lider</option>
              <option value="2">Supervisor</option> 
            </select>
        </div>
          <!------------------------------------------------------------------------ Botón de guardar ----------------------------------------------------------->
        <div class="divbtn" id="guardar">
          <input type="submit" class="button-6" name="guardar" value="Guardar">
        </div>
      </form> 
      </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!--<script src="../../js/div.js"></script> Ocultar Div -->
    <!--<script src="../../js/combobox.js"></script> Combobox dinamico -->
    <!--<script src="../../js/fecha.js"></script> Fecha -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script language="javascript"> //Combo Dinamico

    </script>

  </body>
</html>
<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'admin');
 
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
  <!--Barra de navegacion-->
<div class="nav-bg"> 
  <nav class="navegacion-principal contenedor">
    <a href="HxH.php">Registro</a>
    <a href="Rechazos.php">Rechazos</a>
    <a href="Motivos.php">Motivos</a>
    <a href="Personal.php">Personal</a>
  </nav>
</div>
  <main role="main" class="">
    <div class="contenedor sombra" >
     <p class="f1">Rechazos - <span id="fechaActual"></span></p>
      <form class="" method="post" id="formulario" action="../../Controller/Principal.php">
        <div class="div">
          <label class="f2" for="sucursal">SUCURSAL</label>
            <select class="s1" name="sucursal" id="sucursal" required>
              <option value="1">Technology park</option>
              <option value="2">Euclides</option> 
            </select>
        </div>
        <div class="divfecha divfecha1">
         <div class="divfecha2">
           <label class="f2" for="Fechaini">FECHA INICIO</label>
           <label class="f2" for="Fechafin">HORA INICIO</label>
           <input class="t1" type="date" id="fechaini" name="fechaini" data-archivo="ad"/>
           <div class="divfecha">
            <select class="s1" id="horaini" name="horaini">
             <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerHora();
             ?> 
            </select>
            <select class="s1" id="minini" name="minini">
             <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerMin();
             ?> 
            </select>
           </div>
         </div>
         <div class="divfecha2">
           <label class="f2" for="Horaini">FECHA FIN</label>
           <label class="f2" for="Horafin">HORA FIN</label>
           <input class="t1" type="date" id="fechafin" name="fechafin"/>
           <div class="divfecha">
            <select class="s1" id="horafin" name="horafin">
             <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerHora();
             ?> 
            </select>
            <select class="s1" id="minfin" name="minfin">
             <?php
              include_once('../../Model/Funciones.php');

              $fun = new Funciones();
              echo $fun->obtenerMin();
             ?> 
            </select>
           </div>
         </div>
        </div>
        <div class="div" id="OTsel" >
          <label class="f2" for="ot">OT</label>
          <select class="s1" name="ot" id="ot" required>
            <?php
            include_once('../../Model/Funciones.php');

            $fun = new Funciones();
            echo $fun->obtenerOT();
            ?>
          </select>
        </div> 
        <div class="div" id="lote">
           <label class="f2" for="lote">LOTE</label>
           <input required readonly type="text" class="t1" name="lote1" id="lote1" >
        </div> 
        <div class="div" id="producto">
           <label class="f2" for="producto">PRODUCTO</label>
           <input required readonly type="text" class="t1" id="producto" >
        </div>
        <div class="div" id="maquinaR">
          <label class="f2" for="maquinaR">MAQUINA</label>
          <select class="s1" name="maquina" id="maquina" required>
            <?php
            include_once('../../Model/Funciones.php');

            $fun = new Funciones();
            echo $fun->obtenerArea();
            ?>
          </select>
        </div> 
        <!--<div class="div" id="maquina">
           <label class="f2" for="maquina">MAQUINA</label>
           <select class="s1" name="maquina1" id="maquina1" required>
            <option selected disabled value="">Selecciona una opción</option>
           </select>
        </div>-->
        <div class="div">
            <label class="f2" for="turno">TURNO</label>
            <select class="s1" name="turno" id="turno" required>
              <option selected disabled value="">Selecciona una opción</option>
              <option value="MATUTINO">MATUTINO</option>
              <option value="VESPERTINO">VESPERTINO</option>
              <option value="NOCTURNO">NOCTURNO</option>
            <select>
        </div>
        <div class="div">
          <label class="f2" for="lider">LÍDER DE LÍNEA</label>
          <select class="s1" name="lider" id="lider" required>
            <?php
            include_once('../../Model/Funciones.php');

            $fun = new Funciones();
            echo $fun->obtenerLider();
            ?>
          </select>
        </div> 
        <div class="div">
          <label class="f2" for="supervisor">SUPERVISOR</label>
          <select class="s1" name="supervisor" id="supervisor" required>
            <?php
            include_once('../../Model/Funciones.php');

            $fun = new Funciones();
            echo $fun->obtenerSupervisor();
            ?>
          </select>
        </div>  
        <div class="div" id="piezas">
          <label class="f2" for="VelocidadMaquina">CANTIDAD DE PIEZAS</label>
          <input type="number" min="0" name="piezas" class="t1" id="VelocidadMaquina" placeholder="Escribe tu respuesta">
        </div> 
        <div class="div" id="rechazos">
          <label class="f2" for="rechazo">MOTIVO DE RECHAZO</label>
          <select class="s1" name="rechazo" id="rechazo" required>
          </select>
        </div>
          <!------------------------------------------------------------------------ Botón de guardar ----------------------------------------------------------->
        <div class="divbtn" id="guardar">
          <input type="submit" class="button-6" name="Guardar_rechazo" value="Rechazo">
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
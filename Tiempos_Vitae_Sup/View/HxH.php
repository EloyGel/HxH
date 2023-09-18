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
    <link rel="icon" href="../img/timer.ico">
    <title>HxH</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
    <link href='../css/estilo.css' rel="stylesheet">
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
        <img src="../img/logo_vitae_N.png" alt="" height="100px">
      </a>
    </div>
    <br/><br/>
    <main role="main" class="container">
      <div class="jumbotron overflow-auto" >
        <h1>Vitae Acondicionamiento</h1>
        <p></p>
        <form class="form-group" method="post" id="formulario" action="../Controller/Principal.php">
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
            <option selected disabled value="">Selecciona una área</option> 
            <?php
            include_once('../Model/Funciones.php');

            $fun = new Funciones();
            $data = $fun->obtenerArea();
            foreach ($data as $valores):               
             echo '<option value="'.$valores["id"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
            endforeach;
              ?>
           </select>
          </div>
          <div class="form-group">
            <label for="producto">PRODUCTO</label>
            <select class="form-control" name="producto" id="producto" required>
              <option selected disabled value="">Selecciona una opción</option>
              <?php
              include_once('../Model/Funciones.php');

              $fun = new Funciones();
              $data = $fun->obtenerProducto();
              foreach ($data as $valores):
               echo '<option value="'.$valores["rowid"].'">'.iconv("ISO-8859-1","UTF-8", $valores["description"]).'</option>';
              endforeach;
              ?>
            </select>
          </div>
          <div class="form-group" id="lote">
            <label for="lote">LOTE</label>
            <input required type="text" class="form-control" name="lote" id="lote" placeholder="Escribe tu respuesta">
          </div> 
          <div class="form-group">
            <label for="ot">OT</label>
            <input required type="text" class="form-control" name="ot" id="ot" placeholder="Escribe tu respuesta">
          </div> 
          <div class="form-group">
            <label for="lider">LÍDER DE LÍNEA</label>
            <select class="form-control" name="lider" id="lider" required>
              <option selected disabled value="">Selecciona una opción</option>
              <?php
              include_once('../Model/Funciones.php');

              $fun = new Funciones();
              $data = $fun->obtenerLider();
              foreach ($data as $valores):
               echo '<option value="'.$valores["rowid"].'">'.iconv("ISO-8859-1","UTF-8", $valores["NOMBRE"]).'</option>';
              endforeach;
              ?>
            </select>
          </div> 
          <div class="form-group">
            <label for="supervisor">SUPERVISOR</label>
            <select class="form-control" name="supervisor" id="supervisor" required>
              <option selected disabled value="">Selecciona una opción</option>
              <?php
              include_once('../Model/Funciones.php');

              $fun = new Funciones();
              $data = $fun->obtenerSupervisor();
              foreach ($data as $valores):
               echo '<option value="'.$valores["rowid"].'">'.iconv("ISO-8859-1","UTF-8", $valores["NOMBRE"]).'</option>';
              endforeach;
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
              <option selected disabled value="">Selecciona una opción</option>
              <?php
              include_once('../Model/Funciones.php');

              $fun = new Funciones();
              $data = $fun->obtenerSETUP();
              foreach ($data as $valores):               
               echo '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
              endforeach;
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
              <option selected disabled>Selecciona una opción</option>
              <?php
              include_once('../Model/Funciones.php');

              $fun = new Funciones();
              $data = $fun->obtenerProceso();
              foreach ($data as $valores):               
               echo '<option value="'.$valores["ROWID"].'">'.$valores["DESCRIPCION"].'</option>';
              endforeach;
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
              <option selected disabled>Selecciona una opción</option>
              <?php
              include_once('../Model/Funciones.php');

              $fun = new Funciones();
              $data = $fun->obtenerParo();
              foreach ($data as $valores):               
               echo '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
              endforeach;
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
    <script src="../js/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function(){
        //Ocultar Div
        $("#setup").css("display","none");
        $("#proceso").css("display","none");
        $("#paro").css("display","none");
        $("#FinTurno").css("display","none");
        
        $('#estatus').change(function(){
          if($('#estatus').val() == 'setup'){    //Selección del estatus SETUP
            $("#setup").css("display","block");
            $("#proceso").css("display","none");
            $("#paro").css("display","none");
            $("#FinTurno").css("display","none"); 

            $("#inspector").css("display","none");
            $("#observaciones1").css("display","none");

            $('#MotSetup').change(function(){
             if($('#MotSetup').val() == '5')
              {$("#inspector").css("display","block");
               $("#observaciones1").css("display","block");}
             else
              {$("#inspector").css("display","none");
               $("#observaciones1").css("display","block");}
            });
   
          }
          if($('#estatus').val() == 'proceso'){   //Selección del estatus proceso
            $("#proceso").css("display","block");
            $("#setup").css("display","none");
            $("#paro").css("display","none");
            $("#FinTurno").css("display","none");

            $("#piezas").css("display","none");
            $("#observaciones2").css("display","none");

            $('#TipoProceso').change(function(){
             if($('#TipoProceso').val() != '11')
              {$("#piezas").css("display","none");
               $("#observaciones2").css("display","block");}
             else
              {$("#piezas").css("display","block");
               $("#observaciones2").css("display","none");}
            });
          }
          if($('#estatus').val() == 'paro'){     //Selección del estatus paro
            $("#paro").css("display","block");
            $("#setup").css("display","none");
            $("#proceso").css("display","none");
            $("#FinTurno").css("display","none");;
          }
          if($('#estatus').val() == 'fin'){       //Selección del estatus fin
            $("#FinTurno").css("display","block");
            $("#setup").css("display","none");
            $("#proceso").css("display","none");
            $("#paro").css("display","none");
          }
        })
      });
    </script>

  </body>
</html>
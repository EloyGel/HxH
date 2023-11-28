<?php
session_start();
error_reporting(1);

include_once('../../Model/Funciones.php');

$fun = new Funciones();
echo $fun->acceso($_SESSION['vitae'],'admin');
$_SESSION['vitae']['TIME'] = time();
echo $fun->header(1,'Admin');
?>
 <div class="logo">
  <h1>Menú principal</h1>
  <button href = "../../View/Operador/HxH.php" class="boton BotonAdmin" id="boton1">Operador</button>
  <button href = "../../View/Supervisor/Supervisor.php" class="boton BotonAdmin" id="boton2">Supervisor</button>
  <button href = "../../View/Reporte.php" class="boton BotonAdmin" id="boton3">Reporte</button>
  <button href = "../../View/Admin/HxH.php" class="boton BotonAdmin" id="boton4">Admin</button>
 </div>
 <script>
    document.getElementById("boton1").addEventListener("click", function() {
      window.location.href = "../../View/Operador/HxH.php";
    });

    document.getElementById("boton2").addEventListener("click", function() {
      window.location.href = "../../View/Supervisor/HxH.php";
    });

    document.getElementById("boton3").addEventListener("click", function() {
      window.location.href = "../../View/Reporte.php";
    });

    document.getElementById("boton4").addEventListener("click", function() {
      window.location.href = "../../View/Admin/HxH.php";
    });
  </script>
</body>
</html>
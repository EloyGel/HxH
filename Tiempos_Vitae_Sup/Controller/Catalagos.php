<?php
 session_start();
 include_once('../Model/db.php');

 $conexion = Conexion::getInstance();

 if(isset($_POST['personal'])){

    $antefirma = $_POST['ante'];
    $nombre = $_POST['nombre'];
    $empresa = $_POST['empresa'];
    $sucursal = $_POST['sucursal']; 
    $usuario = $_SESSION['vitae']['USU'];
    $puesto = $_POST['puesto'];

 try 
 {
  $params = array(':p1' => 'EMPLEADO',':p2' => $antefirma, ':p3' => $nombre,':p4' => $empresa,':p5' => $sucursal,':p6' => $usuario,':p7' => $puesto );
  $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS_EMPLEADO :p1,:p2,:p3,:p4,:p5,:p6,:p7");
  $query->execute($params); 
  echo "<script>alert('Empleado guardado');</script>";
 }catch (Exception $e) {
  if($e->errorInfo[1] === 51000) {
    echo "Error: " . $e->getMessage(); // Muestra el mensaje de error específico para duplicados
    } else {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage(); // Mensaje para otros errores
    }
 }
}

 echo "<script> window.location.replace('/Tiempos_VITAE_SUP/View/Admin/Personal.php'); </script>";

 ?>   
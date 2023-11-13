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

 echo "<script> window.location.replace('/Tiempos_VITAE_SUP/View/Admin/Personal.php'); </script>";
}

if(isset($_POST['motivo'])){
  $maquina = $_POST['maquina'];
  $motivo = $_POST['motivos'];
  $n1 = $_POST['n1'];
  if(isset($_POST['n2'])){$n2 = $_POST['n2'];}
  if(isset($_POST['n3'])){$n3 = $_POST['n3'];}
  if(isset($_POST['n4'])){$n4 = $_POST['n4'];}
  $usuario = $_SESSION['vitae']['USU'];

  
  if($n4 != ''){
    if(($n3 != '') && ($n2 != '')){
      $paro = '1';
    }else
    {
     if($n3 != ''){
      $paro = 'motivo 2';
     }else
     {$paro = 'motivo 3';}
    }
  }else
  if(($n3 != '')){
    if(($n2 != '')){
      $paro = '1';
    }else
    {$paro = 'motivo 2';}
  }else
  if($n2 != ''){
    $paro = '1'; 
  }else
  {$paro = '1';}

  
  if($paro === '1'){
    try{
    $params = array(':p1' => 'MOTIVO',':p2' => $maquina, ':p3' => $motivo,':p4' => $n1,':p5' => $n2,':p6' => $n3,':p7' => $n4, ':p8' => $usuario);
    $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS_MOTIVO :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8");
    $query->execute($params); 
    echo "<script>alert('Motivo guardado');</script>";
    }catch (Exception $e) {
    if($e->errorInfo[1] === 51000) {
     echo "Error: " . $e->getMessage(); // Muestra el mensaje de error específico para duplicados
     } else {
     echo "Ocurrió un error con la base de datos: " . $e->getMessage(); // Mensaje para otros errores
     }
    }
  }else
  {
    echo "<script>alert('Falta información en el " . $paro . "');</script>";
  }
  echo "<script> window.location.replace('/Tiempos_VITAE_SUP/View/Admin/Motivos.php'); </script>";
}

//echo "<script> window.location.replace('/Tiempos_VITAE_SUP/View/Admin/Motivos.php'); </script>";



 /*echo '<script>';
 echo 'console.log(' . json_encode($_POST) . ');';     //Revisar la información que trae el post
 echo '</script>';*/

 /*try{
    $params = array(':p1' => 'MOTIVO',':p2' => $maquina, ':p3' => $motivo,':p4' => $n1,':p5' => $n2,':p6' => $n3,':p7' => $n4, ':p8' => $usuario);
    $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS_MOTIVO :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8");
    $query->execute($params); 
    echo "<script>alert('Motivo guardado');</script>";
  }catch (Exception $e) {
   if($e->errorInfo[1] === 51000) {
     echo "Error: " . $e->getMessage(); // Muestra el mensaje de error específico para duplicados
     } else {
     echo "Ocurrió un error con la base de datos: " . $e->getMessage(); // Mensaje para otros errores
     }
  }*/

 ?>   
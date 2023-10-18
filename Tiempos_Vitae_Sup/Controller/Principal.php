<?php
 session_start();
 include_once('../Model/db.php');

 $conexion = Conexion::getInstance();

 $sucursal = intval($_POST['sucursal']); 
 $fechaini = $_POST['fechaini'];
 $fechafin = $_POST['fechafin'];
 $horaini = $_POST['horaini'].':'.$_POST['minini'].':00';
 $horafin = $_POST['horafin'].':'.$_POST['minfin'].':00';

 $ott = dividirProd($_POST['ot']); 
 if($ott !== false){$ot = $ott["v1"];}
 else{$ot = 'Error';}

 $lote = $_POST['lote1'];
 
 $prod = dividirProd($_POST['producto1']); 
 if($prod !== false){$producto = $prod["v1"].'-'.$prod["v2"];}
 else{$producto = 'Error';}
 
 $maquina = $_POST['maquina'];
 $turno = $_POST['turno'];
 $lider = intval($_POST['lider']); 
 $supervisor = intval($_POST['supervisor']); 
 $usuario = $_SESSION['vitae']['USU'];
 

 if(isset($_POST['guardar']))  //Click al botón de guardar
  {
   $estatus = $_POST['estatus'];

   if($estatus == 'proceso')
    {
     $piezas = intval($_POST['piezas']);
     try 
      {
       $params = array(':p1' => 'PROCESO',':p2' => $sucursal, ':p3' => $fechaini,':p4' => $fechafin,':p5' => $horaini,':p6' => $horafin,':p7' => $ot,
                       ':p8' => $lote,':p9' => $producto,':p10' => $maquina,':p11' => $turno, ':p12' => $lider, ':p13' => $supervisor, ':p14' => $usuario, 
                       ':p15' => $estatus,':p16' => $piezas,':p17' => '' );
       $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16,:p17 ");
       $query->execute($params); 
      }catch (Exception $e) {
       echo "Ocurrió un error con la base de datos: " . $e->getMessage();
      }
    }
   else
   if($estatus == 'paro')
    {
     $paro = intval($_POST['motivo']);
     try 
      {
        $params = array(':p1' => 'PARO',':p2' => $sucursal, ':p3' => $fechaini,':p4' => $fechafin,':p5' => $horaini,':p6' => $horafin,':p7' => $ot,
                        ':p8' => $lote,':p9' => $producto,':p10' => $maquina,':p11' => $turno, ':p12' => $lider, ':p13' => $supervisor, ':p14' => $usuario, 
                        ':p15' => $estatus,':p16' => 0,':p17' => $paro );
        $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16,:p17 ");
        $query->execute($params); 
      }catch (Exception $e) {
       echo "Ocurrió un error con la base de datos: " . $e->getMessage();
      }
    }
    echo "<script>alert('Reporte guardado');</script>";
  }
  else
  if(isset($_POST['Guardar_rechazo'])) 
  {   
   $piezas = intval($_POST['piezas']);
   $rechazo = intval($_POST['rechazo']);
   try 
    {
     $params = array(':p1' => 'RECHAZO',':p2' => $sucursal, ':p3' => $fechaini,':p4' => $fechafin,':p5' => $horaini,':p6' => $horafin,':p7' => $ot,
                     ':p8' => $lote,':p9' => $producto, ':p10' => $maquina,':p11' => $turno, ':p12' => $lider, ':p13' => $supervisor, ':p14' => $usuario, 
                     ':p15' => '',':p16' => $piezas,':p17' => $rechazo );
     $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16,:p17 ");
     $query->execute($params);
    }catch (Exception $e) {
     echo "Ocurrió un error con la base de datos: " . $e->getMessage();
    }
    echo "<script>alert('Rechazo guardado');</script>";
  }
  echo "<script> window.location.replace('/Tiempos_VITAE_SUP/View/Operador/HxH.php'); </script>";



  function dividirProd($valor) 
  {
   $partes = explode("-", $valor);

   if(count($partes) == 3) // Dividir la cadena en tres variables
    {              
     $primerNumero = $partes[0];
     $segundoNumero = $partes[1];

     return array("v1" => $primerNumero, "v2" => $segundoNumero);
    } 
   else{return false;} // Manejar un valor incorrecto
  }


  /*echo '<script>';
  echo 'console.log(' . json_encode($_POST) . ');';     //Revisar la información que trae el post
  echo '</script>';*/
?>
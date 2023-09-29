<?php
 include_once('../Model/db.php');

 $conexion = Conexion::getInstance();

 if(isset($_POST['guardar']))  //Click al botón de guardar
  {
   $sucursal = $_POST['sucursal']; 
   $area = $_POST['area'];
   $producto = $_POST['producto'];
   $lote = $_POST['lote'];
   $ot = $_POST['ot'];
   $lider = $_POST['lider']; 
   $supervisor = $_POST['supervisor'];
   $turno = $_POST['turno'];
   $es = $_POST['estatus'];   

   if($es == 'setup')
    {
     $motivo1 = $_POST['motivo1'];
     $observaciones1 = $_POST['observaciones1'];
     $inspector = $_POST['inspector'];
                    
     if($motivo1 == 5)  //Selección de la opción liberación, se abre el campo de inspector
      {
      try
      {
        $tipo = 'setup1';
        $params = array(':p1' => $tipo,':p2' => $sucursal, ':p3' => $area,':p4' => $producto,':p5' => $lote,':p6' => $ot,':p7' => $lider,':p8' => $supervisor,':p9' => $turno, ':p10' => $es, 
        ':p11' => $motivo1, ':p12' => $observaciones1, ':p13' => $inspector, ':p14' => 0, ':p15' => '' );
        $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15 ");
  
        $query->execute($params); 
      }catch (Exception $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
       }
      }
      else
      {
      try
      {
        $tipo = 'setup1';
        $params = array(':p1' => $tipo,':p2' => $sucursal, ':p3' => $area,':p4' => $producto,':p5' => $lote,':p6' => $ot,':p7' => $lider,':p8' => $supervisor,':p9' => $turno, ':p10' => $es, 
        ':p11' => $motivo1, ':p12' => $observaciones1, ':p13' => '', ':p14' => 0, ':p15' => '' );
        $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15 ");
  
        $query->execute($params); 
      }catch (Exception $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
       }
      }
    }
   else
   if($es == 'proceso')
    {
     $motivo2 = $_POST['motivo2'];
     $piezas = $_POST['piezas'];
     $observaciones2 = $_POST['observaciones2'];

     if($motivo2 == 11)  //Selecciona de la opción fin de proceso, se abre el campo de piezas  
      {
       try
       {
        $tipo = 'proceso1';
        $params = array(':p1' => $tipo,':p2' => $sucursal, ':p3' => $area,':p4' => $producto,':p5' => $lote,':p6' => $ot,':p7' => $lider,':p8' => $supervisor,':p9' => $turno, ':p10' => $es, 
        ':p11' => $motivo2, ':p12' => $observaciones2, ':p13' => '', ':p14' => $piezas, ':p15' => '' );
        $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15 ");
  
        $query->execute($params); 
       }catch (Exception $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
       }
      }
      else
      {
       try
       {
        $tipo = 'proceso2';
        $params = array(':p1' => $tipo,':p2' => $sucursal, ':p3' => $area,':p4' => $producto,':p5' => $lote,':p6' => $ot,':p7' => $lider,':p8' => $supervisor,':p9' => $turno, ':p10' => $es, 
        ':p11' => $motivo2, ':p12' => $observaciones2, ':p13' => '', ':p14' => 0, ':p15' => '' );
        $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15 ");
  
        $query->execute($params); 
       }catch (Exception $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
       }
      }
    }
   else
   if($es == 'paro')
    {
     $motivo3 = $_POST['motivo3'];
     $descripcion3 = $_POST['descripcion3'];
     $observaciones3 = $_POST['observaciones3'];
     $tipo = 'paro';
     try
     {
      $params = array(':p1' => $tipo,':p2' => $sucursal, ':p3' => $area,':p4' => $producto,':p5' => $lote,':p6' => $ot,':p7' => $lider,':p8' => $supervisor,':p9' => $turno, ':p10' => $es, 
      ':p11' => $motivo3, ':p12' => $observaciones3, ':p13' => '', ':p14' => 0, ':p15' => $descripcion3 );
      $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15 ");

      $query->execute($params); 
     }catch (Exception $e) {
      echo "Ocurrió un error con la base de datos: " . $e->getMessage();
     }
    }
   else
   if($es == 'fin')
    {
     $observaciones4 = $_POST['observaciones4'];
     $tipo = 'fin';
     try 
      {
        $params = array(':p1' => $tipo,':p2' => $sucursal, ':p3' => $area,':p4' => $producto,':p5' => $lote,':p6' => $ot,':p7' => $lider,':p8' => $supervisor,':p9' => $turno, ':p10' => $es, 
          ':p11' => 0, ':p12' => $observaciones4, ':p13' => '', ':p14' => 0, ':p15' => '' );
        $query = $conexion->obtenerConexion()->prepare("EXEC  GV.HORA_A_HORA_INS :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15 ");

        $query->execute($params); 
       //$resultado = $query->execute($params); 
      }catch (Exception $e) {
       echo "Ocurrió un error con la base de datos: " . $e->getMessage();
      }
     }
    echo "<script>alert('Reporte guardado');</script>";
  }
  echo "<script> window.location.replace('/Tiempos_VITAE_SUP/View/HxH.php'); </script>";

?>
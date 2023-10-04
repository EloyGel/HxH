<?php

  include_once('../Model/db.php');

  $conexion = Conexion::getInstance();

  if(isset($_POST['ot'])){ 
    $id_part = $_POST['ot'];

    echo obtenerOT($conexion, $id_part); 
  }
  else
  if(isset($_POST['lote'])){
    $id_ot = '%'.$_POST['lote'].'%';

    echo obtenerLOTE($conexion, $id_ot);
  }


  function obtenerOT($conexion, $id_part){
    $params = array(':p1' => 'OT', ':p2' => $id_part, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $num = $query->rowCount(); //Función para contar el número de registros afectados por la consulta
    $data = $query->fetchAll();
    $html = '<option selected disabled value="">Selecciona una OT</option>';

    foreach ($data as $valores):
      $html .= '<option value="'.$valores["OT"].'">'.iconv("ISO-8859-1","UTF-8", $valores["OT"]).'</option>';
    endforeach;
  
    echo $html;
  }

  function obtenerLOTE($conexion, $id_ot){
    $params = array(':p1' => 'LOTE', ':p2' => $id_ot, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<label for="lote">LOTE</label>';

    foreach ($data as $valores):
      $html .= '<input readonly required type="text" class="form-control" name="lote1" id="lote1" value="'.$valores['STRING_VAL'].'"">';
    endforeach;

    echo $html;
  }

 ?>




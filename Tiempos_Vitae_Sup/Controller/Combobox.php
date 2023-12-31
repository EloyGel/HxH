<?php

  include_once('../Model/db.php');

  $conexion = Conexion::getInstance();

  /*if(isset($_POST['ot'])){ 
    $id_part = $_POST['ot'];

    echo obtenerOT($conexion, $id_part); 
  }
  else*/

  if(isset($_POST['lote'])){ 
    $resultado = dividirOT($_POST['lote']);

    $id_ot = '%'.$resultado["v1"].'%';
    echo obtenerLOTE($conexion, $id_ot);
  }
  else
  if(isset($_POST['prod'])){
    $resultado = dividirOT($_POST['prod']);

    $id_ot = $resultado['v1'];

    echo obtenerProd($conexion, $id_ot);
  }
  else
  if(isset($_POST['maquina'])){
    $resultado = dividirOT($_POST['maquina']);

    if ($resultado !== false) { 
      $p1 = $resultado["v1"];
      $p2 = $resultado["v2"];
    }

    echo obtenerMaquina($conexion, $p1, $p2);
  }
  else
  if(isset($_POST['motivo'])){
    $m1 = $_POST['motivo'];

    echo obtenerMotivo($conexion, $m1);
  }
  else
  if(isset($_POST['motivo1'])){
    $m1 = $_POST['motivo1'];

    echo obtenerMotivo1($conexion, $m1);
  }
  else
  if(isset($_POST['motivo2'])){
    $m1 = $_POST['motivo2'];

    echo obtenerMotivo2($conexion, $m1);
  }
  else
  if(isset($_POST['motivo3'])){
    $m1 = $_POST['motivo3'];

    echo obtenerMotivo3($conexion, $m1);
  }
  else
  if(isset($_POST['rechazo'])){
    $p1 = $_POST['rechazo'];

    echo obtenerRechazo($conexion, $p1);
  }



/***********************************************************FUNCIONES DE CONSULTAS**********************************************************************/

  /*function obtenerOT($conexion, $id_part){
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
  }*/

  function obtenerMaquina($conexion, $id_part, $id_lote){
    $params = array(':p1' => 'maquina', ':p2' => $id_part, ':p3' => $id_lote);
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<option selected disabled value="">Selecciona una Máquina</option>';

    foreach ($data as $valores):
      $html .= '<option value="'.$valores["maquina"].'">'.iconv("ISO-8859-1","UTF-8", $valores["maquina"]).'</option>';
    endforeach;
  
    echo $html;
  }

  function obtenerLOTE($conexion, $id_ot){
    $params = array(':p1' => 'LOTE', ':p2' => $id_ot, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<label class="f2" for="lote">LOTE</label>';

    foreach ($data as $valores):
      $html .= '<input readonly required type="text" class="t1" name="lote1" id="lote1" value="'.$valores['STRING_VAL'].'"">';
    endforeach;

    echo $html;
  }

  function obtenerProd($conexion, $id_ot){
    $params = array(':p1' => 'producto', ':p2' => $id_ot, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<label class="f2" for="producto">PRODUCTO</label>';

    foreach ($data as $valores):
      $html .= '<input readonly required type="text" class="t1" name="producto1" id="producto1" value="'.$valores['Producto'].'"">';
    endforeach;

    echo $html;
  }

/***********************************************************MOTIVO DE RECHAZO*******************************************************************************/

  function obtenerRechazo($conexion, $id_maquina){
    $params = array(':p1' => 'rechazo', ':p2' => $id_maquina, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<option selected disabled value="">Selecciona un Rechazo</option>';

    foreach ($data as $valores):
      $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
    endforeach;
  
    echo $html;
  }

/***********************************************************MOTIVO DE PARO*******************************************************************************/

  function obtenerMotivo($conexion, $id_motivo){                                          //Nivel 1
    $params = array(':p1' => 'motivo', ':p2' => $id_motivo, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<option selected disabled value="">Selecciona un motivo</option>';

    foreach ($data as $valores):
      $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
    endforeach;
  
    echo $html;
  }

  function obtenerMotivo1($conexion, $id_motivo1){                                        //Nivel 2
    $params = array(':p1' => 'motivo1', ':p2' => $id_motivo1, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<option selected disabled value="">Selecciona un motivo</option>';

    foreach ($data as $valores):
      $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
    endforeach;
  
    echo $html;
  }

  function obtenerMotivo2($conexion, $id_motivo2){                                        //Nivel 3
    $params = array(':p1' => 'motivo2', ':p2' => $id_motivo2, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<option selected disabled value="">Selecciona un motivo</option>';

    foreach ($data as $valores):
      $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
    endforeach;
  
    echo $html;
  }

  function obtenerMotivo3($conexion, $id_motivo3){                                        //Nivel 4
    $params = array(':p1' => 'motivo3', ':p2' => $id_motivo3, ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll();
    $html = '<option selected disabled value="">Selecciona un motivo</option>';

    foreach ($data as $valores):
      $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
    endforeach;
  
    echo $html;
  }

/***********************************************************Funciones de datos*******************************************************************************/

  function dividirOT($valor) {
    // Dividir la cadena en dos variables
    $partes = explode("-", $valor);

    if (count($partes) == 2) {
        $primerNumero = $partes[0];
        $segundoNumero = $partes[1];

        return array("v1" => $primerNumero, "v2" => $segundoNumero);
    } else {
        // Manejar un valor incorrecto
        return false;
    }
  }


 ?>




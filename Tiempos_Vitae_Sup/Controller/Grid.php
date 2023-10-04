<?php
  error_reporting(1);
  include_once('../Model/db.php');

  $conexion = Conexion::getInstance();

  if (isset($_POST['action']) && $_POST['action'] === 'obtenerData') {
    obtenerGrid($conexion);
  }
  else
  if (isset($_POST['action']) && $_POST['action'] === 'motivo1') {
    obtenerGrid($conexion);
  }
  else
  if (isset($_POST['action']) && $_POST['action'] === 'motivo2') {
    obtenerGrid($conexion);
  }


  function obtenerGrid($conexion){
    /*$params = array(':p1' => 'dataNow', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);*/

    $data = array(
      array(
          "Fecha" => "2023-08-03 11:48:29.460",
          "Estatus" => "setup",
          "Producto" => "OMEPRAZOL PELLETS 8.5 %",
          "Lote" => "zz",
          "OT" => "1",
          "Area" => "ss",
          "Lider" => "aa",
          "Supervisor" => "dd",
          "Turno" => "Nocturno"
      ),
      array(
          "Fecha" => "2023-08-04 12:30:00.000",
          "Estatus" => "producción",
          "Producto" => "IBUPROFENO 200 mg",
          "Lote" => "yy",
          "OT" => "2",
          "Area" => "mm",
          "Lider" => "bb",
          "Supervisor" => "ee",
          "Turno" => "Matutino"
      ),
      // Agrega más datos ficticios aquí
    );
  
    header('Content-Type: application/json'); 
    return json_encode($resultados);
  }

  function motivo1($conexion){
    $params = array(':p1' => 'motivo1', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
  
    header('Content-Type: application/json'); 
    return json_encode($data);
  }

  function motivo2($conexion){
    $params = array(':p1' => 'motivo2', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
  
    header('Content-Type: application/json'); 
    return json_encode($data);
  }

 ?>
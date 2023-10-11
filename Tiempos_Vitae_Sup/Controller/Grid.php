<?php
  error_reporting(1);
  include_once('../Model/db.php');

  $conexion = Conexion::getInstance();

  if (isset($_POST['action']) && $_POST['action'] === 'obtenerGrid') {
    echo obtenerGrid($conexion);
  }
  else
  if (isset($_POST['action']) && $_POST['action'] === 'motivo1') {
    echo motivo1($conexion);
  }
  else
  if (isset($_POST['action']) && $_POST['action'] === 'motivo2') {
    echo motivo2($conexion);
  }


  function obtenerGrid($conexion){
    $params = array(':p1' => 'dataNow', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $resultados = array();

    foreach ($data as $fila) {
        $resultado = array(
            "Estatus" => $fila["Estatus"],
            "Producto" => iconv("ISO-8859-1", "UTF-8", $fila["Producto"]),
            "Lote" => iconv("ISO-8859-1", "UTF-8", $fila["Lote"]),
            "OT" => iconv("ISO-8859-1", "UTF-8", $fila["OT"]),
            "Area" => iconv("ISO-8859-1", "UTF-8", $fila["AREA"]),
            "Lider" => iconv("ISO-8859-1", "UTF-8", $fila["Lider"]),
            "Supervisor" => iconv("ISO-8859-1", "UTF-8", $fila["Supervisor"]),
            "Turno" => $fila["Turno"]
        );

        $resultados[] = $resultado;
    }
  
    header('Content-Type: application/json'); 
    return json_encode($resultados);
  }

  function motivo1($conexion){
    $params = array(':p1' => 'motivo1', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $resultados = array();

    // Procesar los datos y guardarlos en el arreglo
    foreach ($data as $fila) {
        $resultado = array(
            "Motivo" => iconv("ISO-8859-1", "UTF-8", $fila["Motivo"])
        );

        $resultados[] = $resultado;
    }
  
    header('Content-Type: application/json'); 
    return json_encode($resultados);
  }

  function motivo2($conexion){
    $params = array(':p1' => 'motivo2', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $resultados = array();

    // Procesar los datos y guardarlos en el arreglo
    foreach ($data as $fila) {
        $resultado = array(
            "Motivo" => iconv("ISO-8859-1", "UTF-8", $fila["Motivo"])
        );

        $resultados[] = $resultado;
    }
  
    header('Content-Type: application/json');  
    return json_encode($resultados);
  }

 ?>
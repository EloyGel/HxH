<?php
  error_reporting(1);
  include_once('../Model/db.php');

  $conexion = Conexion::getInstance();

  if (isset($_POST['action']) && $_POST['action'] === 'obtenerGrid') {
    echo obtenerGridNow($conexion);
    //echo obtenerDatosDeMuestra();
  }
  else
  if (isset($_POST['action']) && $_POST['action'] === 'obtenerEmpleado') {
    echo ObtenerPersonal($conexion);
  }
  else
  if (isset($_POST['action']) && $_POST['action'] === 'motivo1') {
    echo motivo1($conexion);
  }
  else
  if (isset($_POST['action']) && $_POST['action'] === 'motivo2') {
    echo motivo2($conexion);
  }

  function obtenerDatosDeMuestra() {
    $datosDeMuestra = array(
        array(
            "Fecha_Inicio" => "2023-10-20",
            "Fecha_Fin" => "2023-10-21",
            "Hora_Inicio" => "08:00:00",
            "Hora_Fin" => "16:00:00",
            "OT" => "OT-123",
            "Lote" => "Lote-ABC",
            "Producto" => "Producto-X",
            "Maquina" => "Máquina-1",
            "Turno" => 1,
            "Estatus" => "Activo",
            "Nivel_1" => "Nivel-1",
            "Nivel_2" => "Nivel-2",
            "Nivel_3" => "Nivel-3",
            "Nivel_4" => "Nivel-4",
            "Piezas" => 100,
            "Lider" => "Líder-A",
            "Supervisor" => "Supervisor-B",
            "Sucursal" => "Sucursal-XYZ"
        ),
        // Agrega más datos de muestra aquí si es necesario
    );

    return json_encode($datosDeMuestra);
}


  function obtenerGridNow($conexion){
    $params = array(':p1' => 'dataNow', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $resultados = array();

    foreach ($data as $fila) {
        $resultado = array( 
          "Fecha_Inicio" => $fila["Fecha_Inicio"],
          "Fecha_Fin" => $fila["Fecha_Fin"],
          "Hora_Inicio" => $fila["Hora_Inicio"],
          "Hora_Fin" => $fila["Hora_Fin"],
          "OT" => iconv("ISO-8859-1", "UTF-8", $fila["OT"]),
          "Lote" => iconv("ISO-8859-1", "UTF-8", $fila["LOTE"]),
          "Producto" => iconv("ISO-8859-1", "UTF-8", $fila["Producto"]),
          "Maquina" => iconv("ISO-8859-1", "UTF-8", $fila["MAQUINA"]),
          "Estatus" => $fila["Estatus"],
          "Turno" => $fila["TURNO"],
          "Nivel_1" => iconv("ISO-8859-1", "UTF-8", $fila["Nivel_1"]),
          "Nivel_2" => iconv("ISO-8859-1", "UTF-8", $fila["Nivel_2"]),
          "Nivel_3" => iconv("ISO-8859-1", "UTF-8", $fila["Nivel_3"]),
          "Nivel_4" => iconv("ISO-8859-1", "UTF-8", $fila["Nivel_4"]),
          "Piezas" => intval($fila["Piezas"]),
          "Lider" => iconv("ISO-8859-1", "UTF-8", $fila["Lider"]),
          "Supervisor" => iconv("ISO-8859-1", "UTF-8", $fila["Supervisor"]),
          "Sucursal" => iconv("ISO-8859-1", "UTF-8", $fila["Sucursal"])
        );

        $resultados[] = $resultado;
    }
  
    header('Content-Type: application/json'); 
    return json_encode($resultados);
  }

  function ObtenerPersonal($conexion){
    $params = array(':p1' => 'personal', ':p2' => '', ':p3' => '');
    $query = $conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
    $query->execute($params);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $resultados = array();

    foreach ($data as $fila) {
        $resultado = array( 
          "ID" => iconv("ISO-8859-1", "UTF-8", $fila["ID"]),
          "NOMBRE" => iconv("ISO-8859-1", "UTF-8", $fila["NOMBRE"]),
          "PUESTO" => iconv("ISO-8859-1", "UTF-8", $fila["PUESTO"]),
          "EMPRESA" => iconv("ISO-8859-1", "UTF-8", $fila["EMPRESA"]),
          "SUCURSAL" => iconv("ISO-8859-1", "UTF-8", $fila["SUCURSAL"])
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
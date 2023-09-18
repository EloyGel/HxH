<?php
  include_once('db2.php');

  $params = array(':p1' => 'dataNow',':p2' => '', ':p3' => '');
  $query = $base_de_datos->prepare("EXEC  GV.HORA_A_HORA_SEL :p1,:p2,:p3");
           
  $query->execute($params);
  $data = $query->fetchAll();
 
  header('Content-Type: application/json');
  echo json_encode(["data" => $data]);

 ?>




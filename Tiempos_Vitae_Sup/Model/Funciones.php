<?php
   require_once ('db.php'); 
   

   class Funciones {
    private $conexion;
   
      /*public function __construct($conexion) {
        return $this->conexion = $conexion;
      }*/

      public function __construct() {
        $this->conexion = Conexion::getInstance();
      }
      
      public function obtenerData() {
        try {
          //header('Content-Type: application/json');
          $params = array(':p1' => 'dataNow', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          $data = $query->fetchAll();
          return json_encode($data);

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }
////////////////////////////////////////////////////////////Funciones de carga del grid///////////////////////////////////////////////
      public function login($pam1,$pam2) {
        try {
          $params = array(':p1' => 'login',':p2' => $pam1, ':p3' => $pam2);
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }
////////////////////////////////////////////////////////////Función del LogIn/////////////////////////////////////////////////////////
      public function obtenerProducto() {
        try {
          $params = array(':p1' => 'producto', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
       
          return $query->fetchAll();

          } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
       }

      public function obtenerArea() {
        try {
          $params = array(':p1' => 'area', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }

      public function obtenerLider() {
        try {
          $params = array(':p1' => 'lider', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }

      public function obtenerSupervisor() {
        try {
          $params = array(':p1' => 'supervisor', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }
////////////////////////////////////////////////////////////Funciones de información general///////////////////////////////////////////////
      public function obtenerSETUP() {
        try {
          $params = array(':p1' => 'setup', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }
////////////////////////////////////////////////////////////Función de SETUP//////////////////////////////////////////////////////////////
      public function obtenerProceso() {
        try {
          $params = array(':p1' => 'proceso', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }
////////////////////////////////////////////////////////////Función de Proceso//////////////////////////////////////////////////////////////
      public function obtenerParo() {
        try {
          $params = array(':p1' => 'paro', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }
////////////////////////////////////////////////////////////Función de Paro/////////////////////////////////////////////////////////////////
   }


 ?>
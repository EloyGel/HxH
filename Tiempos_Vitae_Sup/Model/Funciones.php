<?php
   require_once ('db.php'); 
   error_reporting(1);

   class Funciones {
    private $conexion;
   
      /*public function __construct($conexion) {
        return $this->conexion = $conexion;
      }*/

      public function __construct() {
        $this->conexion = Conexion::getInstance();
      }
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
      /*public function obtenerProducto() {
        try {
          $params = array(':p1' => 'producto', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
       
          return $query->fetchAll();

          } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
       }*/

       public function obtenerOT(){
        try {
          $params = array(':p1' => 'OT', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona una OT</option>';

          foreach ($data as $valores):
            $html .= '<option value="'.$valores["OT"].'">'.iconv("ISO-8859-1","UTF-8", $valores["OT"]).'</option>';
          endforeach;
       
          return $html;

          } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
       }

       public function obtenerProducto() {
        try {
          $params = array(':p1' => 'producto', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona un producto</option>';

          foreach ($data as $valores):
            $html .= '<option value="'.$valores["rowid"].'">'.iconv("ISO-8859-1","UTF-8", $valores["description"]).'</option>';
          endforeach;
       
          return $html;

          } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
       }

      public function obtenerArea() {
        try {
          $params = array(':p1' => 'area', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona una área</option>';

          foreach ($data as $valores):               
            $html .= '<option value="'.$valores["DESCRIPCION"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
          endforeach;

          return $html;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }

      public function obtenerLider() {
        try {
          $params = array(':p1' => 'lider', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona un Lider</option>';    

          foreach ($data as $valores):
            $html .= '<option value="'.$valores["rowid"].'">'.iconv("ISO-8859-1","UTF-8", $valores["NOMBRE"]).'</option>';
          endforeach;

          return $html;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }

      public function obtenerSupervisor() {
        try {
          $params = array(':p1' => 'supervisor', ':p2' => '', ':p3' => '');
          $query = $this->conexion->obtenerConexion()->prepare("EXEC GV.HORA_A_HORA_SEL :p1,:p2,:p3");
          $query->execute($params);
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona un Supervisor</option>';  

          foreach ($data as $valores):
            $html .= '<option value="'.$valores["rowid"].'">'.iconv("ISO-8859-1","UTF-8", $valores["NOMBRE"]).'</option>';
          endforeach;
    
          return $html;

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
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona una opción</option>'; 

          foreach ($data as $valores):               
            $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
          endforeach;
    
          return $html;

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
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona una opción</option>'; 

          foreach ($data as $valores):               
            $html .= '<option value="'.$valores["ROWID"].'">'.$valores["DESCRIPCION"].'</option>';
          endforeach;
    
          return $html;

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
          $data = $query->fetchAll();
          $html = '<option selected disabled value="">Selecciona una opción</option>';

          foreach ($data as $valores):               
            $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
          endforeach;
    
          return $html;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
      }

////////////////////////////////////////////////////////////Función de Paro/////////////////////////////////////////////////////////////////
      public function obtenerHora() {
        //$html = '<option selected disabled value="">Hora</option>';

        for ($hour = 0; $hour <= 23; $hour++) {
          $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT); // Asegura que siempre tenga dos dígitos
          $html .= "<option value=\"$formattedHour\">$formattedHour</option>";
        }

        return $html;
      }

      public function obtenerMin() {
        //$html = '<option selected disabled value="">Minuto</option>';

        for ($hour = 0; $hour <= 59; $hour++) {
          $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT); // Asegura que siempre tenga dos dígitos
          $html .= "<option value=\"$formattedHour\">$formattedHour</option>";
        }

        return $html;
      }

////////////////////////////////////////////////////////////Funciones hora y minutos//////////////////////////////////////////////////
   }


 ?>
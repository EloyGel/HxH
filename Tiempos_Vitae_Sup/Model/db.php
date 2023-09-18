<?php

class Conexion{

    private $con;
    private static $instance; // Declarar la propiedad como estática
    private $base_de_datos;

    public function __construct()
    {
     $contraseña = "L0g1n@dm1nSql"; 
     $usuario = "sa";
     $nombreBaseDeDatos = "VITDB_TST";
     $rutaServidor = "10.0.0.92"; 
     try {
      $this->base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
      $this->base_de_datos->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM);
     } catch (Exception $e) {
       echo "Ocurrió un error con la base de datos: " . $e->getMessage();
     }
    }

    public static function getInstance() {
      if (self::$instance === null) {
          self::$instance = new self();
      }
      return self::$instance;
    }

    public function obtenerConexion() {
        return $this->base_de_datos;
    }

}


?>
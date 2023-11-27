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
          $html = '<option selected disabled value="">Selecciona una máquina</option>';

          foreach ($data as $valores):               
            $html .= '<option value="'.$valores["ID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["DESCRIPCION"]).'</option>';
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
            $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["NOMBRE"]).'</option>';
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
            $html .= '<option value="'.$valores["ROWID"].'">'.iconv("ISO-8859-1","UTF-8", $valores["NOMBRE"]).'</option>';
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

public function acceso($sesion,$permiso) {
  if($sesion['PERFIL'] != null || $sesion['PERFIL'] !=''){
    if($sesion['PERFIL'] == 'admin' || $sesion['PERFIL'] == $permiso)
      {}else{
        header("location:/Tiempos_Vitae_Sup/View/error.html");
      }
  }else
  {header("location:/Tiempos_Vitae_Sup/View/error.html");}
}

////////////////////////////////////////////////////////////Validación de acceso//////////////////////////////////////////////////

public function header($tit,$tipo){
  if($tit == 1){
    $titulo = 'Ventana de Registro';
  }else
  if($tit == 2){
    $titulo = 'Ventana de Rechazos'; 
  }else
  if($tit == 3){
    $titulo = 'Bitacora del día en curso';
  }else
  if($tit == 4){
    $titulo = 'Reporte de Horas no capturadas'; 
  }else
  if($tit == 5){
    $titulo = 'Motivos de paro'; 
  }else
  if($tit == 6){
    $titulo = 'Listado de personal'; 
  }

  if($tipo == 'Ope'){
    $nav = $this->NavOpe();
  }else 
  if($tipo == 'Sup'){
    $nav = $this->NavSup();
  }else
  if($tipo == 'Admin'){
    $nav = $this->NavAdmin();
  }

  $head = 
  '
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>'.$titulo.'</title>
  <link rel = "icon" href="../../img/timer.ico" type="image / x-icon">
  <link rel="preload" href="../../css/normalize.css" as="style">
  <link href="../../css/normalize.css" rel="stylesheet"> <!--Normalize-->
  <link rel="preconnect" href="https://use.typekit.net">
  <link rel="stylesheet" href="https://use.typekit.net/qmu2qyo.css"><!--Fuente Myriad pro-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> <!--Fuente Monyserrat sans-->
  <link rel="preload" href="../../css/styles.css?v=1.0" as="style">
  <link href="../../css/styles.css?v=1.0" rel="stylesheet"> <!--Hoja de estilos-->
  <!--
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css?v=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css?v=1.0">
  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css?v=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css?v=1.0">
  </head>
  <body>

  <header>
    <div class="logo"> 
      <section class="logo-T">
        <a href="../../index.php">
          <picture>
            <source srcset="../../img/logo_vitae_N.png" type="image/png" alt="Vitae">
            <img class="logo-tomza" src="../../img/logo_vitae_N.png" alt="Vitae">
          </picture>
        </a>  
      </section>
    </div>
  </header> 

  ';

  $html = $head . $nav;

  return $html;
}

public function NavSup(){
  $html = 
  '
  <div class="nav-bg">  
    <nav class="navegacion-principal contenedor">
        <a href="HxH.php">Registro</a>
        <a href="Rechazos.php">Rechazos</a>
        <a href="Bitacora.php">Bitacora</a>
        <a href="Reporte.php">Reporte</a>
    </nav>
  </div>
  ';

  return $html;
}

public function NavOpe(){
  $html = 
  '
  <div class="nav-bg">  
    <nav class="navegacion-principal contenedor">
        <a href="HxH.php">Registro</a>
        <a href="Bitacora.php">Bitacora</a>
        <a href="Rechazos.php">Rechazos</a>
    </nav>
  </div>
  ';

  return $html;
}

public function NavAdmin(){
  $html = 
  '
  <div class="nav-bg"> 
   <nav class="navegacion-principal contenedor">
     <a href="HxH.php">Registro</a>
     <a href="Rechazos.php">Rechazos</a>
     <a href="Motivos.php">Motivos</a>
     <a href="Personal.php">Personal</a>
   </nav> 
  </div>
  ';

  return $html;
}

public function HxH($fecha){
  $html =
  '
  <main role="main" class="">
  <div class="contenedor sombra">
   <p class="f1">Vitae Acondicionamiento <span id="fechaActual"></span></p>
    <form class="" method="post" id="formulario" action="../../Controller/Principal.php">
      <div class="div">
        <label class="f2" for="sucursal">SUCURSAL</label>
          <select class="s1" name="sucursal" id="sucursal" required>
            <option value="1">Technology park</option>
            <option value="2">Euclides</option> 
          </select>
      </div>
      <div class="divfecha divfecha1">
       <div class="divfecha2">
         <label class="f2" for="Fechaini">FECHA INICIO</label>
         <label class="f2" for="Fechafin">HORA INICIO</label>
         <input class="t1" type="date" id="fechaini" name="fechaini" data-archivo="'.$fecha.'"/>
         <div class="divfecha">
          <select class="s1" id="horaini" name="horaini">
    
          '.$this->obtenerHora().'

          </select>
          <select class="s1" id="minini" name="minini">

          '.$this->obtenerMin().'

          </select>
         </div>
       </div>
       <div class="divfecha2">
         <label class="f2" for="Horaini">FECHA FIN</label>
         <label class="f2" for="Horafin">HORA FIN</label>
         <input class="t1" type="date" id="fechafin" name="fechafin"/>
         <div class="divfecha">
         <select class="s1" id="horafin" name="horafin">
         
         '.$this->obtenerHora().'

          </select>
          <select class="s1" id="minfin" name="minfin">
          
          '.$this->obtenerMin().'

         </select>
         </div>
       </div> 
      </div>
      <div class="div" id="OTsel" >
        <label class="f2" for="ot">OT</label>
        <select class="s1" name="ot" id="ot" required>
       
        '.$this->obtenerOT().'

        </select>
      </div> 
      <div class="div" id="lote">
         <label class="f2" for="lote">LOTE</label>
         <input required readonly type="text" class="t1" name="lote1" id="lote1" >
      </div> 
      <div class="div" id="producto">
         <label class="f2" for="producto">PRODUCTO</label>
         <input required readonly type="text" class="t1" name="producto1" id="producto1" >
      </div>
      <div class="div" id="maquina">
        <label class="f2" for="maquina">MAQUINA</label>
        <select class="s1" name="maquina" id="maquina" required>
       
        '.$this->obtenerArea().'

        </select>
      </div> 
     <!-- <div class="div" id="maquina">
         <label class="f2" for="maquina">MAQUINA</label>
         <select class="s1" name="maquina1" id="maquina1" required> 
          <option selected disabled value="">Selecciona una opción</option>
         </select>
      </div> -->
      <div class="div">
          <label class="f2" for="turno">TURNO</label>
          <select class="s1" name="turno" id="turno" required>
            <option selected disabled value="">Selecciona una opción</option>
            <option value="MATUTINO">MATUTINO</option>
            <option value="VESPERTINO">VESPERTINO</option>
            <option value="NOCTURNO">NOCTURNO</option>
          <select>
      </div>
      <div class="div">
          <label class="f2" for="lider">LÍDER DE LÍNEA</label>
          <select class="s1" name="lider" id="lider" required>
         
          '.$this->obtenerLider().'

          </select>
      </div> 
      <div class="div">
          <label class="f2" for="supervisor">SUPERVISOR</label>
          <select class="s1" name="supervisor" id="supervisor" required>
          
          '.$this->obtenerSupervisor().'

          </select>
      </div>  
      <div class="div">
          <label class="f2" for="estatus">ESTATUS</label>
          <select class="s1" name="estatus" id="estatus" required>
            <option selected disabled value="">Selecciona una opción</option>
            <option value="proceso">PROCESO</option>
            <option value="paro">PARO</option>
          </select>
      </div>
        <!------------------------------------------------------------------------- Informacion del proceso ------------------------------------------------>
        <div id="proceso">
         <div class="div">
          <label class="f2" for="VelocidadMaquina">CANTIDAD DE PIEZAS</label>
          <input type="number" min="0" name="piezas" class="t1" id="VelocidadMaquina" placeholder="Escribe tu respuesta">
         </div>          
        </div>
        <!------------------------------------------------------------------------ Informacion del paro ------------------------------------------------------>
        <div id="paro">
         <div class="div">
           <label class="f2" for="MotParo">MOTIVO DEL PARO</label>
           <select class="s1" name="motivo" id="motivo">
           </select> 
         </div>
         <div id="paro1">
          <div class="div">
           <label class="f2" for="MotParo1">NIVEL 2</label>
           <select class="s1" name="motivo1" id="motivo1">
           </select> 
          </div>
         </div>
         <div id="paro2">
          <div class="div">
           <label class="f2" for="MotParo2">NIVEL 3</label>
           <select class="s1" name="motivo2" id="motivo2">
           </select> 
          </div>
         </div>
         <div id="paro3">
          <div class="div">
           <label class="f2" for="MotParo3">NIVEL 4</label>
           <select class="s1" name="motivo3" id="motivo3">
           </select> 
          </div>
         </div>
        </div>
        <!------------------------------------------------------------------------ Botón de guardar ----------------------------------------------------------->
        <div class="divbtn" id="guardar">
         <input type="submit" class="button-6" name="guardar" value="Guardar">
        </div>
    </form> 
    </div>
  </main>
  
  <script src="https://code.jquery.com/jquery-3.2.1.min.js?v=1.0"></script>
  <script src="../../js/popper.min.js?v=1.0"></script>
  <script src="../../js/bootstrap.min.js?v=1.0"></script>

  <script src="../../js/div.js?v=1.0"></script> <!--Ocultar Div -->
  <script src="../../js/combobox.js?v=1.0"></script> <!--Combobox dinamico -->
  <script src="../../js/fecha.js?v=1.0"></script> <!--Fecha -->
  
  <script src="https://code.jquery.com/jquery-3.6.0.js?v=1.0"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js?v=1.0"></script>

  </body>
  </html>
  ';

  return $html;
}

public function Rechazo($fecha){
  $html =
  '
  <main role="main" class="">
  <div class="contenedor sombra" >
   <p class="f1">Rechazos - <span id="fechaActual"></span></p>
    <form class="" method="post" id="formulario" action="../../Controller/Principal.php">
      <div class="div">
        <label class="f2" for="sucursal">SUCURSAL</label>
          <select class="s1" name="sucursal" id="sucursal" required>
            <option value="1">Technology park</option>
            <option value="2">Euclides</option> 
          </select>
      </div>
      <div class="divfecha divfecha1">
       <div class="divfecha2">
         <label class="f2" for="Fechaini">FECHA INICIO</label>
         <label class="f2" for="Fechafin">HORA INICIO</label>
         <input class="t1" type="date" id="fechaini" name="fechaini" data-archivo="'.$fecha.'"/>
         <div class="divfecha">
          <select class="s1" id="horaini" name="horaini">
         
          '.$this->obtenerHora().'

          </select>
          <select class="s1" id="minini" name="minini">
         
          '.$this->obtenerMin().'

          </select>
         </div>
       </div>
       <div class="divfecha2">
         <label class="f2" for="Horaini">FECHA FIN</label>
         <label class="f2" for="Horafin">HORA FIN</label>
         <input class="t1" type="date" id="fechafin" name="fechafin"/>
         <div class="divfecha">
          <select class="s1" id="horafin" name="horafin">
         
          '.$this->obtenerHora().'

          </select>
          <select class="s1" id="minfin" name="minfin">
          
          '.$this->obtenerMin().'

          </select>
         </div>
       </div>
      </div>
      <div class="div" id="OTsel" >
        <label class="f2" for="ot">OT</label>
        <select class="s1" name="ot" id="ot" required>

        '.$this->obtenerOT().'

        </select>
      </div> 
      <div class="div" id="lote">
         <label class="f2" for="lote">LOTE</label>
         <input required readonly type="text" class="t1" name="lote1" id="lote1" >
      </div> 
      <div class="div" id="producto">
         <label class="f2" for="producto">PRODUCTO</label>
         <input required readonly type="text" class="t1" id="producto" >
      </div>
      <div class="div" id="maquinaR">
        <label class="f2" for="maquinaR">MAQUINA</label>
        <select class="s1" name="maquina" id="maquina" required>
        
        '.$this->obtenerArea().'

        </select>
      </div> 
      <!--<div class="div" id="maquina">
         <label class="f2" for="maquina">MAQUINA</label>
         <select class="s1" name="maquina1" id="maquina1" required>
          <option selected disabled value="">Selecciona una opción</option>
         </select>
      </div>-->
      <div class="div">
          <label class="f2" for="turno">TURNO</label>
          <select class="s1" name="turno" id="turno" required>
            <option selected disabled value="">Selecciona una opción</option>
            <option value="MATUTINO">MATUTINO</option>
            <option value="VESPERTINO">VESPERTINO</option>
            <option value="NOCTURNO">NOCTURNO</option>
          <select>
      </div>
      <div class="div">
        <label class="f2" for="lider">LÍDER DE LÍNEA</label>
        <select class="s1" name="lider" id="lider" required>
        
        '.$this->obtenerLider().'

        </select> 
      </div> 
      <div class="div">
        <label class="f2" for="supervisor">SUPERVISOR</label>
        <select class="s1" name="supervisor" id="supervisor" required>
        
        '.$this->obtenerSupervisor().'

        </select>
      </div>  
      <div class="div" id="piezas">
        <label class="f2" for="VelocidadMaquina">CANTIDAD DE PIEZAS</label>
        <input type="number" min="0" name="piezas" class="t1" id="VelocidadMaquina" placeholder="Escribe tu respuesta">
      </div> 
      <div class="div" id="rechazos">
        <label class="f2" for="rechazo">MOTIVO DE RECHAZO</label>
        <select class="s1" name="rechazo" id="rechazo" required>
        </select>
      </div>
        <!------------------------------------------------------------------------ Botón de guardar ----------------------------------------------------------->
      <div class="divbtn" id="guardar">
        <input type="submit" class="button-6" name="Guardar_rechazo" value="Rechazo">
      </div>

        <!-- Informacion de fin de turno -->
    </form> 
    </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js?v=1.0"></script>
    <script src="../../js/popper.min.js?v=1.0"></script>
    <script src="../../js/bootstrap.min.js?v=1.0"></script>

    <script src="../../js/div.js?v=1.0"></script> <!--Ocultar Div -->
    <script src="../../js/combobox.js?v=1.0"></script> <!--Combobox dinamico -->
    <script src="../../js/fecha.js?v=1.0"></script> <!--Fecha -->
  
    <script src="https://code.jquery.com/jquery-3.6.0.js?v=1.0"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js?v=1.0"></script>

   </body>
  </html>
  ';

  return $html;
}

public function Bitacora($tipo){
  $html = 
  '
  <div class="grid-container"> 
  <h1>Registros del día <span id="fechaActual"></span></h1>
  </div>

  <div class="contenedor grid-container">
  <table id="Hora" class="grid-text display table grid-item" data-archivo="'.$tipo.'">
    <thead>
      <tr>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th>OT</th>
        <th>Lote</th>
        <th>Producto</th>
        <th>Maquina</th>
        <th>Estatus</th>
        <th>Turno</th>
        <th>Nivel 1</th>
        <th>Nivel 2</th>
        <th>Nivel 3</th>
        <th>Nivel 4</th>
        <th>Piezas</th>
        <th>Lider</th>
        <th>Supervisor</th>
        <th>Sucursal</th>
      </tr>
    </thead>
      <tbody>

      </tbody>
  </table>
  </div>


  <!--
  <script src="../../js/library/jquery-3.7.0.js"></script>
  <script src="../../js/library/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  -->

  <script src="https://code.jquery.com/jquery-3.7.0.js?v=1.0"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js?v=1.0"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js?v=1.0"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js?v=1.0"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js?v=1.0"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js?v=1.0"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js?v=1.0"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css?v=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css?v=1.0">

  <script src="https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json?v=1.0"></script>

  <script src="../../js/library/modernizr.js?v=1.0"></script>
  <script src="../../js/library/animacion-index.js?v=1.0"></script> 

  <script src="../../js/grid.js?v=1.0"></script>
  <script src="../../js/fecha.js?v=1.0"></script>


  </body>
  </html>
  ';

  return $html;
}

public function index(){
  $html =
  '
  <!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="icon" href="img/timer.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css?v=1.0">
    <link rel="stylesheet" href="css/login2.css?v=1.0">
  </head>
  <body>
  <!-- partial:index.partial.html -->
  <div class="wrapper">
    <form class="login" method="POST" action="Controller/login.php" autocomplete="off">
      <p class="title">Vitae Laboratorios</p>
      <input required type="text" name="usu" placeholder="Usuario" autofocus/>
      <i class="fa fa-user"></i>
      <input required type="password" name="pass" placeholder="Contraseña" />
      <i class="fa fa-key"></i>
      <button type="submit" name="guardar">
        <i class="spinner"></i>
        <span class="state">Ingresar</span>
      </button>
    </form>
    <footer></footer>
    </p>
  </div>
  <!-- partial -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js?v=1.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js?v=1.0"></script>

  </body>
  </html>
  ';

  return $html;
}

////////////////////////////////////////////////////////////Generación de código HTML//////////////////////////////////////////////////

   }


 ?>
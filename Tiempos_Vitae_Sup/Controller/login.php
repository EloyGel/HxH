<?PHP
 include_once('../Model/Funciones.php');

 if ((isset($_POST['usu']) && $_POST['pass'])){
      $fun = new Funciones();
      $pam1 = $_POST['usu'];
      $pam2 = $_POST['pass'];

      $resultado = $fun->login($pam1,$pam2);

 if(count($resultado) >= 1){    
  session_start();
     
  $datos = array('USU' => $resultado[0]['ID'], 'PERFIL' => $resultado[0]['PERFIL'],'TIME' => time());
  $_SESSION['vitae'] = $datos;

  if($datos['PERFIL'] === 'operador') { 
    header("location:/Tiempos_Vitae_Sup/View/Operador/HxH.php");
   }
   else
   if($datos['PERFIL'] === 'supervisor') {
    header("location:/Tiempos_Vitae_Sup/View/Supervisor/Supervisor.php");
   }
   else
   if($datos['PERFIL'] === 'admin') {
    header("location:/Tiempos_Vitae_Sup/View/Admin/Admin.php");
   } 
 }
 else{   
  header("location:/OBJ_MPS/index.php");
 }
}
?>

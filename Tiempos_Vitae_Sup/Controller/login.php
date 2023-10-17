<?PHP
 include_once('../Model/Funciones.php');
 session_start();

 if ((isset($_POST['usu']) && $_POST['pass'])){
      $fun = new Funciones();
      $pam1 = $_POST['usu'];
      $pam2 = $_POST['pass'];

      $resultado = $fun->login($pam1,$pam2);
      
 if(count($resultado) >= 1){       
   foreach ($resultado as $fila) {

      $datos = array('USU' => $fila['ID'], 'PERFIL' => $fila['PERFIL']);

     if($datos['PERFIL'] === 'operador') {
        $_SESSION['vitae'] = $datos;
        header("location:/Tiempos_Vitae_Sup/View/Operador/HxH.php");
     }
     else
     if($datos['PERFIL'] === 'supervisor') {
        $_SESSION['vitae'] = $datos;
        header("location:/Tiempos_Vitae_Sup/View/Supervisor/Supervisor.php");
     }
     else
     if($datos['PERFIL'] === 'directivo') {
        $_SESSION['vitae'] = $datos;
        header("location:/Tiempos_Vitae_Sup/View/Reporte.php");
     }
     else
     if($datos['PERFIL'] === 'admin') {
        $_SESSION['vitae'] = $datos;
        header("location:/Tiempos_Vitae_Sup/View/Admin/Admin.php");
     }   
   }
 }
 else{   
  echo "<script> window.location.replace('/Tiempos_Vitae_Sup/index.php'); </script>";
 }
}
?>

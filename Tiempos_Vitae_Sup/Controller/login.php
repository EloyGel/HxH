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
     if($fila['PERFIL'] === 'operador') {
        $_SESSION['vitae'] = 'operador';
        header("location:/Tiempos_Vitae_Sup/View/HxH.php");
     }
     else
     if($fila['PERFIL'] === 'supervisor') {
        $_SESSION['vitae'] = 'VITAE';
        header("location:/Tiempos_Vitae_Sup/View/Supervisor.php");
     }
     else
     if($fila['PERFIL'] === 'directivo') {
        $_SESSION['vitae'] = 'VITAE';
        header("location:/Tiempos_Vitae_Sup/View/Reporte.php");
     }
     else
     if($fila['PERFIL'] === 'admin') {
        $_SESSION['vitae'] = 'admin';
        header("location:/Tiempos_Vitae_Sup/View/Admin.php");
     }   
   }
 }
 else{   
  echo "<script> window.location.replace('/Tiempos_Vitae_Sup/index.php'); </script>";
 }
}
?>

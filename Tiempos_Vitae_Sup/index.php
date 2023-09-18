<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <link rel="icon" href="img/timer.ico">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/login2.css">
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
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</body>
</html>
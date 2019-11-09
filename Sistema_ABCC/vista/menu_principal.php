<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema ABCC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php require_once('menu_principal.php'); ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color: #c63608; color:white;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> Sistema ABCC </a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li class="active"><a href="#">INCIO</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Drop Down <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Pagge 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li> -->
      <li><a href="formulario_altas.php">Agregar</a></li>
      <li><a href="bajas_cambios.php">Eliminar</a></li>
      <li><a href="bajas_cambios.php">Modificar</a></li>
      <li><a href="buscar_registro.php">Buscar</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="formulario_registrar_usuario.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login_usuario.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="../scripts_php/cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> CERRAR SESION </a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 
</div>

</body>
</html>

<?php 
  session_start();
  if(!isset($_SESSION['usuario'])) {
    header("Location:../index.php");
  }else {
    if($_SESSION['usuario']=="ok") {
      $nombreUsuario=$_SESSION['nombreUsuario'];
    }
  }
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
  <?php $url="http://".$_SERVER['HTTP_HOST']."/crudlibros" ?>

  <div class="navbar  navbar-expand  navbar-light  bg-light">
    <div class="nav  navbar-nav">
      <a class="nav-item  nav-link  active" href="#">Administrador del sitio web</a>
      <a class="nav-item  nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>	
      <a class="nav-item  nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Libros</a>
      <a class="nav-item  nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar sesión</a>
    </div>	
  </div>
  <div class="container">
    <br>
  	<div class="row">
<?php 
  session_start();
  if($_POST) {
    if( ($_POST['usuario']=="Facundo") && ($_POST['contrasenia']=="sistema") ) {
      $_SESSION['usuario']="ok";
      $_SESSION['nombreUsuario']="Facundo";

      header('Location:inicio.php');
    }else {
      $mensaje="El usuario o contraseña son incorrectos";
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador del sitio web</title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      	
      </div>

  	  <div class="col-md-4">
  	  	<br><br><br>
  	  	<div class="card">

  	  	  <div class="card-header">
  	  	    Login
  	  	  </div>
  	  	  
  	  	  <div class="card-body">
          <?php if(isset($mensaje)) {?>  
            <div class="alert  alert-danger" role="alert">
              <?php echo $mensaje; ?>
            </div>
          <?php } ?>  
  	  	
  	  	    <form method="POST">
  	  	      <div class="form-group">
  	  	        <label class="exampleInputEmail1  p-1">Usuario</label>	
  	  	        <input type="text" class="form-control" name="usuario" placeholder="Introduce tu email">
  	  	      </div>

  	  	      <div class="form-group">
  	  	      	<label class="exampleInputPassword1  p-1">Contraseña</label>
  	  	      	<input type="password" class="form-control" name="contrasenia" placeholder="Introduce tu password">
  	  	      	<button type="submit" class="btn  btn-primary  mt-2">Administrar</button>
  	  	      </div>	
  	  	    </form>
  	  	  </div>
  	  	</div>

        <a href="../index.php" class="btn  btn-success  mt-4" id="btn-web">Ir al sitio web</a>
        <style>#btn-web {margin-left: 5.5rem;}</style>

  	  </div>  
  	</div>
  </div>
</body>
</html>
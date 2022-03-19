<?php 

// conexión a BDD

  // servidor
  $host = "localhost";
  $bd = "sitio";
  $usuario = "root";
  $contrasenia = "";

  try {
    // permite la conexion a la base de datos, es una funcion reservada de PHP
    $conexion = new PDO("mysql:host=$host; dbname=$bd", $usuario, $contrasenia);
    // si conexion es true, mostrar echo
    // if($conexion) {echo "Conectado a BDD";}

    // agarra info en caso de que haga una falla
  }catch(Exception $ex) {
    // muestra el mensaje a través de la funcion
    echo $ex->getMessage();
  }

?>
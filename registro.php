<?php

include('conexionBD.php');
if(isset($_POST['submit'])){

  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $fecha_nac = $_POST['fecha'];
  $email = $_POST['email'];
  $clave = $_POST['clave'];

  $crear_usuario = "INSERT INTO usuarios (nomobre, apellidos, fecha, email, clave) VALUES
  ('{$nombre}','{$apellidos}', '{$fecha_nac}', '{$email}', '{$clave}')";

  $resul = $conexion->query($crear_usuario);
  if($resul){
    echo "¡Bienvenido/a a HEARTIST! <br>";
  } else {
    echo "Ha habido un error en el registro de tu cuenta. Por favor, inténtalo de nuevo.";
  }
}
?>


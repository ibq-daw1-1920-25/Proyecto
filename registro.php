<?php

include('conexionBD.php');

if(isset($_POST['submit'])){

  $usuario = $_POST['usuario'];
  $fecha_nac = $_POST['fecha'];
  $email = $_POST['email'];
  $clave = $_POST['clave'];

  $comprobar_usuario = "SELECT * FROM usuarios WHERE usuario ='".$usuario."' AND email ='".$email."'";

  if(mysqli_num_rows($comprobar_usuario) > 0){
    echo '<p class = "error"> El usuario ya está en uso o ya se ha registrado</p>';
  }

  $crear_usuario = "INSERT INTO usuarios (usuario, fecha, email, clave) VALUES
  ('{$usuario}', '{$fecha_nac}', '{$email}', '{$clave}')";
  
  
  $resul = $conexion->query($crear_usuario);
  if($resul){
    echo "¡Bienvenido/a a HEARTIST! <br>";
    header("location: index.php");
  } else {
    echo "Ha habido un error en el registro de tu cuenta. Por favor, inténtalo de nuevo.";
  }
}
?>


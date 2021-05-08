<?php

include('conexionBD.php');
if(isset($_POST['submit'])){

  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $email = $_POST['email'];
  $clave = $_POST['clave'];

  $crear_usuario = "INSERT INTO usuarios (nombre, apellidos, dia, mes, anio, email, clave1, clave2) VALUES
  ('{$nombre}','{$apellidos}', '{$dia}', '{$mes}', '{$anio}', '{$email}', '{$clave}')";

  $resul = $conexion->query($crear_usuario);
  if($resul){
    echo "¡Bienvenido/a a HEARTIST! <br>";
  } else {
    echo "Ha habido un error en el registro de tu cuenta. Por favor, inténtalo de nuevo.";
  }
}
?>

Esta es la página principal de:
<img src="./img/logo.png" alt="Logo de HEARTIST">

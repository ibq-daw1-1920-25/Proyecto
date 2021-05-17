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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEARTIST: ¡Regístrate!</title>
    <link rel="stylesheet" href="./css/import.css">
    <link rel="icon" type="image/png" href="./img/play.png" />
  </head>
  <body class = "bodySmall" onload="inicio()">
    <img id="logoRegistro" src="./img/logo.png" alt="Logo de HEARTIST">

    <div id="contformulario">
    <span><button onclick="history.go(-1); return false;" id = "btnBack">Atrás</button></span>
    <h2>CREAR CUENTA :</h2>
    
    <form action="principal.php" method="post" >
        <label>Nombre:</label>
        <input type="text" name="nombre" value="" required><br>
        <label>Apellidos:</label>
        <input type="text" name="apellidos" value="" required><br>
        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha">
        <label>Email:</label>
        <input type="text" name="email" value="" required><br>
        <label>Contraseña:</label>
        <input type="password" name="clave" value="" maxlength="8" required><br>
        <label>Confirmar contraseña:</label>
        <input type="password" name="clave2" value="" maxlength="8" required><br>
        <p id = "msg"></p><br>
        <button type="submit" name="submit" onclick="comprobarClave()">Regístrate</button>
    </form>
  </div>
  </body>
</html>

<!-- C Ó D I G O   J A V A S C R I P T -->

<?php


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HEARTIST - Iniciar Sesión</title>
    <link rel="stylesheet" href="./css/import.css">
    <link rel="icon" type="image/png" href="./img/play.png" />
  </head>
  <body>
    <img id="logoRegistro" src="./img/logo.png" alt="Logo de HEARTIST">
    <div id="continicio">
    <form action="principal.php" method="post">
        <label>Email:</label>
        <input type="text" name="usuario" value="" required><br>
        <label>Contraseña:</label>
        <input type="password" name="clave" value="" maxlength="8" required><br>
        <p id = "msg"></p><br>
        <button type="submit" name="submit">Iniciar Sesión</button>
        <div id = "registro">
          <h3>¿Aún no tienes cuenta?</h3>
          <a href="formulario_registro.php">Regístrate aquí</a>
        </div>
    </form>
  </div>
  </body>
</html>

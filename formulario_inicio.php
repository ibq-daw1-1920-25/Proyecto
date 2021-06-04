
<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HEARTIST - Iniciar Sesión</title>
      <link rel="stylesheet" href="./css/import.css">
      <link rel="icon" type="image/png" href="./img/play.png" />
    </head>
    <body class = "bodySmall">
      <img id="logoRegistro" src="./img/logo.png" alt="Logo de HEARTIST">
      <div id="continicio">
        <form action="" method="post">
          <label>Email:</label>
          <input type="text" name="email" value="" required><br>
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
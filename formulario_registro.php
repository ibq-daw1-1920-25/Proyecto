<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de registro - HEARTIST</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="icon" type="image/png" href="./img/logo_f.png" />
  </head>
  <body>
    <img src="./img/logo.png" alt="Logo de HEARTIST">
    <div id="contformulario">

    <h2>Crear cuenta:</h2> <a id = "back" href="index.php">Atrás</a>
    <form action="registro.php" method="post" >
        <label>Nombre:</label>
        <input type="text" name="nombre" value="" required><br>
        <label>Apellidos:</label>
        <input type="text" name="apellidos" value="" required><br>
        <label>Fecha de nacimiento:</label>
        <input class="formfecha" type="text" name="dia" value="" placeholder="Día" size="2" maxlength="2" required>
        <input class="formfecha" type="text" name="mes" value="" placeholder="Mes" size="10" maxlength="10" required>
        <input class="formfecha" type="text" name="anio" value="" placeholder="Año" size="4" maxlength="4" required><br>
        <label>Email:</label>
        <input type="text" name="email" value="" required><br>
        <label>Contraseña:</label>
        <input type="password" name="clave1" value="" maxlength="8" required><br>
        <label>Confirmar contraseña:</label>
        <input type="password" name="clave2" value="" maxlength="8" required><br>
        <p id = "msg"></p><br>
        <button type="submit" name="submit" onclick="comprobarClave()">Regístrate</button>
    </form>
  </div>
  </body>
</html>

<script type="text/javascript">
  function comprobarClave(){
    var clave1 = document.getElementsByName("clave1");
    var clave2 = document.getElementsByName("clave2");
    var mensaje = document.getElementById("msg");
    var input = document.getElementsByTagName("input");


    if (clave1 == "") {
    mensaje.innerHTML = "El campo es obligatorio."
  } else if (clave2 == "") {
    mensaje.innerHTML = "El campo es obligatorio."
  }  else if (clave1 !=== clave2) {
    mensaje.innerHTML = "Las contraseñas no coinciden.";
  }
}
</script>

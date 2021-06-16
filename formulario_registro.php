
<?php
include('conexionBD.php'); 
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
  
  <body class = "bodySmall">
    <img id="logoRegistro" src="./img/logo.png" alt="Logo de HEARTIST">

    <div id="contformulario">
      <span><button onclick="history.go(-1); return false;" id = "btnBack">Atrás</button></span>
      <h2>CREAR CUENTA :</h2>
    
      <form id = "miFormulario" action="registro.php" method="post" onsubmit="inicio()">
        <label>Nombre de usuario:</label>
        <input type="text" id = "nombre" name="usuario" value="" maxlength="20"><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" id = "fecha" name="fecha">

        <label>Email:</label>
        <input type="text" id = "email" name="email" value=""><br>

        <label>Contraseña:</label>
        <input type="password" id = "clave1" name="clave" value="" maxlength="8"><br>
        <label>Confirmar contraseña:</label>
        <input type="password" id = "clave2" name="clave2" value="" maxlength="8"><br>
        
        <span><p id = "mensajeError"></p></span>

        <button onclick="validarFormulario()" type="submit" name="submit">Regístrate</button>
      </form>
    </div>
  </body>
</html>

<!-- C Ó D I G O   J A V A S C R I P T -->
<script>
  function inicio(){

    /* Mostramos los elementos del formulario por la consola y cargamos
    todas las funciones que queremos que se inicien al cargar la página */

    console.dir(document.forms[0]);
    console.log(document.forms[0].action);
    
  }
  
  function validarFormulario(){
  
    // Recogemos los elementos en variables a través de su id.
    var nombre = document.getElementById("nombre").value;
    var fecha_nac = document.getElementById("fecha").value;
    var email = document.getElementById("email").value;
    var clave1 = document.getElementById("clave1").value;
    var clave2 = document.getElementById("clave2").value;
    var mensaje = document.getElementById("mensajeError");

    // Creamos una variable para validar el formato del correo electrónico.
    var expReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

    // Empezamos a validar los campos del formulario.
    
    // Validación de los inputs si están vacíos.
    if(nombre == "" || fecha_nac == "" || email == "" || clave1 == "" ||  clave2 == "") {
      mensaje.innerHTML = "Todos los campos son obligatorios.";
      mensaje.style.color = "red";
      mensaje.style.fontFamily = "Arial Black";
    }

    // Validación del correo electrónico.
    if(!(expReg.test(email.value))){
      mensaje.innerHTML = "El correo no tiene un formato válido."
    } else {
      mensaje.innerHTML = "";
    }

    // Validación de las contraseñas.
    if(clave1 != clave2){
      mensaje.innerHTML = "Las contraseñas no conciden.";
      mensaje.style.color = "red";
      mensaje.style.fontFamily = "Arial Black";

    } else {
      mensaje.innerHTML = "";

    }

      
  }
  
 
</script>
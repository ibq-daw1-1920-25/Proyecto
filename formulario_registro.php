<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HEARTIST: ¡Regístrate!</title>
    <link rel="stylesheet" href="./css/import.css">
    <link rel="icon" type="image/png" href="./img/play.png" />
  </head>
  <body onload="inicio()">
    <img id="logoRegistro" src="./img/logo.png" alt="Logo de HEARTIST">

    

    <div id="contformulario">
    <span><button onclick="history.go(-1); return false;" id = "btnBack">Atrás</button></span>
    <h2>CREAR CUENTA :</h2>
    
    <form action="registro.php" method="post" >
        <label>Nombre:</label>
        <input type="text" name="nombre" value="" required><br>
        <label>Apellidos:</label>
        <input type="text" name="apellidos" value="" required><br>
        <p></p>
        <label>Fecha de nacimiento:</label>
        <select name="dia" id="diaSelect"></select>
        <select name="mes" id="mesSelect"></select>
        <select name="anio" id="anioSelect"></select><br>
        <!--
        <input class="formfecha" type="text" name="dia" value="" placeholder="Día" size="2" maxlength="2" required>
        <input class="formfecha" type="text" name="mes" value="" placeholder="Mes" size="10" maxlength="10" required>
        <input class="formfecha" type="text" name="anio" value="" placeholder="Año" size="4" maxlength="4" required><br>
        -->
        <p></p>
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
<script type="text/javascript">

// **** FUNCIÓN PARA CARGAR TODAS LAS FUNCIONES DE LA PÁGINA **** //
function inicio(){
fechaNacimiento();
}

// FUNCIÓN PARA CARGAR LOS DÍAS, LOS MESES Y LOS AÑOS EN EL SELECT DE LA FECHA DE NACIMIENTO //
function fechaNacimiento(){
  // DÍA DE NACIMIENTO //
  // Recogemos el id del select para mostrar los días.
  var diaSelect = document.getElementById("diaSelect");
  // Recorremos los días del mes y añadimos un campo "option" para cada uno de ellos.
        for (var i = 1; i <= 31; i++) {
            var option = document.createElement("option");
            option.value = i;
            option.text = i;
            diaSelect.appendChild(option);
        }
    // MES DE NACIMIENTO // 
    // Almacenamos los meses en un array
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    // Recogemos el id del select para mostrar los meses.
    var mesSelect = document.getElementById("mesSelect");
      // Recorremos los meses y añadimos un campo "option" para cada uno de ellos.
      meses.forEach(element => {
        var option =  document.createElement("option");
        option.value = element;
        option.text = element;
        mesSelect.appendChild(option);
      });

      // AÑO DE NACIMIENTO //

      // Recogemos el id del select para mostrar los años.
      var anioSelect = document.getElementById("anioSelect");
      for (var i = 2003; i >= 1950; i--) {
            var option = document.createElement("option");
            option.value = i;
            option.text = i;
            anioSelect.appendChild(option);
      }
}

  

  /*function comprobarClave(){

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
  }*/
</script>

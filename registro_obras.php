<?php

include('conexionBD.php');
if(isset($_POST['submit'])){

  $file = $_POST['archivo'];
  $title = $_POST['nombre'];
  $desc = $_POST['descripcion'];

  $subir_obra = "INSERT INTO obras (archivo, nombre, descripcion) VALUES
  ('{$file}', '{$title}', '{$desc}')";

  $resul = $conexion->query($subir_obra);
  if($resul){
    echo "¡Tu obra se ha añadido con éxito! <br>";
  } else {
    echo "Ha habido un error. Por favor, inténtalo de nuevo.";
  }
}
include('galeria.php')
?>
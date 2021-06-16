<?php
include('galeria.php');
include('conexionBD.php');
if (isset($_POST['submit'])){

  $directorio = 'img/archivos/';

  $file = $directorio.basename($_FILES['archivo']['name']);
  $titulo = $_POST['nombre'];
  $desc = $_POST['descripcion'];
  $usuario = $_SESSION['usuario'];
  $categoria = $_POST['categoria'];

$crear_obra = "INSERT INTO obras (titulo, descripcion, usuario_id, categoria_id, ruta) VALUES
('{$titulo}', '{$desc}', '{$usuario}', '{$categoria}', '{$file}')";

$resul = $conexion->query($crear_obra);
if($resul){
 
  header('location:galeria.php');
} else {
  echo "No se ha podido cargar el archivo. Vuelve a intentarlo.";
}


$subir_obra = $directorio.basename($_FILES['archivo']['name']);
if(move_uploaded_file($_FILES['archivo']['tmp_name'], $subir_obra)){

  
} else {
  echo "<h4>Error al cargar el archivo</h4>";
}

}

?>
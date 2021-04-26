<?php

$cadena_conexion = 'mysql:dbname=heartistBD;host=127.0.0.1:3307';
$usuario = 'root';
$clave = "";

try {
  $conexion = new PDO($cadena_conexion, $usuario, $clave);
  echo "<br>";
} catch (Exception $ex) {
  echo "Error al conectar con la base de datos";
}

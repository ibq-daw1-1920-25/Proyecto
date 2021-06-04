<?php

$cadena_conexion = 'mysql:dbname=heartistbd;host=localhosts:3307';
$usu = 'root';
$clave = "";

$conexion = mysqli_connect($cadena_conexion, $usu, $clave);

if(!$conexion) {
    die("No se puede conectar con la base de datos." . mysqli_connect_error());
}

$usuario = $_POST["email"];
$password = $_POST["clave"];

$q = mysqli_query($conexion, 
    "SELECT * FROM usuarios WHERE usuario = '". $usuario ."' and  clave = '". $password ."' ");

$reg = mysqli_num_rows($q);

if($reg == 1){
    header('location:index.html');
} elseif ($reg == 0){
    echo "La cuenta o la contraseña es incorrecta.";
}


?>
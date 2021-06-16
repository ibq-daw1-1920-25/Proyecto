<?php

include('conexionBD.php');
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $comprobar_usuario = $conexion->query("SELECT * FROM usuarios WHERE email = '". $email ."' AND clave = '". $clave ."'");

    $resul = $comprobar_usuario->fetch(PDO::FETCH_ASSOC);
    if($email == "" OR $clave == ""){
        echo '<p class = "error"> Los campos no pueden estar vacíos.</p>';
      }


    if(!$resul){
        include('formulario_inicio.php');
        echo '<p class = "error"> El usuario y/o la contraseña son incorrectos.</p>';


    }else {
        $_SESSION['usuario'] = $resul['usuario'];
        header("location: index.php");
    }

}

?>
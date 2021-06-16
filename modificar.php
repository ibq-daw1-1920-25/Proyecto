<?php
session_start();
include('conexionBD.php');

if(isset($_POST['submit'])){
    $correo_actual = $_POST['viejo'];
    $nuevo = $_POST['nuevo'];
    var_dump($correo_actual);
    var_dump($nuevo);
    $editar_usuario = ("UPDATE usuarios SET email = '$nuevo' WHERE email = '$correo_actual'");
    var_dump($editar_usuario);
    $resul = $conexion->query($editar_usuario);
    if(!$resul) {
        
        echo "El usuario no se corresponde.";
        header('location:perfil.php');
    } else {
        $correo_actual = $nuevo;
        header('location:perfil.php');
        "Usuario actualizado correctamente.";
    }
}
?>
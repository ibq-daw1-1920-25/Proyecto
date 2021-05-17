<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['email'] = NULL;
  $_SESSION['clave'] = NULL;
  unset($_SESSION['email']);
  unset($_SESSION['clave']);

  //Redireccionamos a la pagina index.php
  header('Location: index.php');
}

?>
<?php

session_start();
session_destroy();

header("location: 'formulario_inicio.php'");
exit();

?>
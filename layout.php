<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/play.png" />
    <link rel="stylesheet" href="./css/import.css">
  </head>

  <div class = "menuNavegacion">
      
      <a href="index.php"><img title = "Inicio" id = "logoPrincipal" src="./img/logo_g.png" alt="Logo de HEARTIST"></a>
      <?php
        if (isset($_SESSION['usuario'])){
    ?>
    <div class = "menu_perfil">
      <a href="cerrar.php?cerrar=yes" id = "salir"> <img title = "Cerrar Sesión" id="imgSalir" src="./img/salir.png" alt="Cerrar Sesión"> </a>
      <a href="perfil.php" id = "perfil"><img title = "Mi perfil" id="imgPerfil" src="./img/perfil.png" alt="Perfil"></a>  
    </div>
  <?php  
  }
  ?>  
      <nav>
      <ul>
        <li><a href="index.php">INICIO</a></li>
        <li><a href="galeria.php">GALERÍA</a>
        <li><a href="explorar.php">EXPLORAR</a></li>
        
      </ul>
    </nav>
  </div> 
  </body>
</html>
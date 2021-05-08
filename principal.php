<?php
include('conexionBD.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/play.png" />
    <link rel="stylesheet" href="./css/import.css">
    <title>HEARTIST - Inicio</title>
  </head>

  <body>

    
    <div class = "menuNavegacion">
      
        <span><img id = "logoPrincipal" src="./img/logo_g.png" alt="Logo de HEARTIST"></span>
        <span ><a href="#" id = "perfil"><img id="imgPerfil" src="./img/perfil.png" alt="Perfil"></a></span>
        <nav>
        <ul>
          <li><a href="#">INICIO</a></li>
          <li><a href="#">GALERÍA</a>
          <li><a href="#">EXPLORAR</a></li>
          
          <div class="buscador">
            <input type="search" id="search" placeholder="Buscar" />
          </div>
        </ul>
      </nav>

    </div>  
    <section class = "container">
      <div class = "contenido">
        What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type 
        specimen book. It has survived not only five centuries, but also the leap into 
        electronic typesetting, remaining essentially unchanged. It was popularised in 
        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
      <div class = "columna">
          Columna
      </div>
    </section>

    <footer>
      Footer
    </footer>
  
  </body>
</html>

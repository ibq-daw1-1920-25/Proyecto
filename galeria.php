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
      
        <a href="principal.php"><img id = "logoPrincipal" src="./img/logo_g.png" alt="Logo de HEARTIST"></a>
        <span ><a href="perfil.php" id = "perfil"><img id="imgPerfil" src="./img/perfil.png" alt="Perfil"></a></span>
        <nav>
        <ul>
          <li><a href="principal.php">INICIO</a></li>
          <li><a href="galeria.php">GALERÍA</a>
          <li><a href="#">EXPLORAR</a></li>
          
          <div class="buscador">
            <input type="search" id="search" placeholder="Buscar" />
          </div>
        </ul>
      </nav>

    </div>  

    <section class = "container">
      <div class = "contenido">
        <?php 
            
        ?>

      </div>
      <div class = "columna">
      <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
        <h4>Selecciona una nueva imagen</h4>
        <div>
          <label>Archivos</label>
          <div>
            <input type="file" id="image" name="image" multiple>
          </div>
          <button name="submit">Cargar Imagen</button>
        </div>
      </form>
      </div>
    

    </section>

    <footer>
    <p>© Copyright. Aplicación realizada por Marina Ramos.</p> 
        <p>I.E.S. Bernaldo de Quirós</p>
    </footer>
  
  </body>
</html>
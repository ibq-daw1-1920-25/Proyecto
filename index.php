  <title>HEARTIST - Inicio</title>
  <body>
  <div class = "login">
    <a href="formulario_inicio.php">Login</a>
    <a href="formulario_registro.php">Registrarse</a>
  </div>

    
    <?php
      include('layout.php');
    ?>


    <section class = "container_index">
      <div class = "contenido_index">
        <p>
        What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type 
        specimen book. It has survived not only five centuries, but also the leap into 
        electronic typesetting, remaining essentially unchanged. It was popularised in 
        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>  
      </div>

      <div class = "index_perfiles">
      Perfiles

          <?php
          require('conexionBD.php');
          
          $sql = "SELECT usuario FROM usuarios";
          $resultado = $conexion->query($sql);

          if(!$resultado) {
            echo "No se pudieron cargar los perfiles.";
          }
          
          while($row = mysql_fetch_assoc($resultado)){
            echo "<div> " . $registro ['usuario'] . "</div> ";
          }
          $resultado->close();

          ?>

      </div>

    

    </section>

    <?php
      include('footer.php');
    ?>

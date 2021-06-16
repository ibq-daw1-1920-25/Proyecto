  <title>HEARTIST - Inicio</title>
  <body>
  <?php
    session_start();
    if (!isset($_SESSION['usuario'])){
    ?>
      <div class = "login">
        <a href="formulario_inicio.php">Login</a>
        <a href="formulario_registro.php">Registrarse</a>
      </div>

  <?php  
  }

  ?>
    <?php
      include('layout.php');
    ?>


    <section class = "container_index">
      <div class = "contenido_index">
        <?php 
        if(isset($_SESSION['usuario'])) {  ?>
        <p></p>
        <strong> Bienvenidx <?php echo $_SESSION['usuario'] ?>!</strong><br>
        <p></p>
        <?php
        }
       ?>

        <p>Músicos, pintores, escultores, bailarines, fotógrafos... en definitiva: ARTISTAS. 
        Si te sientes parte de uno de estos colectivos, ¡ésta es tu aplicación! 
        A través de HEARTIST, podrás acceder a una gran cantidad de contenido de otros creadores como tú.</p>
        <p>Nuestro objetivo es crear una gran comunidad donde puedas conectar con todo tipo de artistas
          y ellos contigo. Ya seas amateur o profesional, haz que tus obras, espectáculos o canciones lleguen
          a todas las partes del mundo.</p>
        <p>Crea tu perfil, sube tu contenido, conecta con otros artistas y ¡disfruta de HEARTIST!</p>
        
        

        </p>  
      </div>

      <div class = "index_perfiles">

          <?php
          include('conexionBD.php');
          
          $mostrar_perfiles = $conexion->prepare("SELECT usuario FROM usuarios");
          $mostrar_perfiles->execute();
          $resultado = $mostrar_perfiles->fetchAll(PDO::FETCH_COLUMN); 

          if(!$resultado) {
            echo "No se pudieron cargar los perfiles.";
          } elseif($resultado){
           
            foreach ($resultado as $rows) {
              $url = "usuario.php?usuario=" . $rows;
              echo "<a href = '$url'><div class = 'mostrar_perfiles'> " . $rows . "</div></a> ";
              
            }
              
            
          }
          

          ?>

      </div>

    

    </section>

    <?php
      include('footer.php');
    ?>

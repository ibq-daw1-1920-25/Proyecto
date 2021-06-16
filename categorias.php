<title>HEARTIST - Categorías</title>
<body>
      <?php
            session_start();
            include('layout.php');
            include('conexionBD.php');
      ?> 
      <section class = "contenido_categorias">
            <div class = "divCat1">
            <?php $cat = $_GET['categoria'];
                  $mostrar_obras = $conexion->prepare("SELECT * FROM obras WHERE categoria_id = '$cat'");
            
                  $mostrar_obras->execute();
                  $resultado = $mostrar_obras->fetchAll(PDO::FETCH_ASSOC); 
                  
                  if(!$resultado){
                        echo "No se pudieron cargar las obras.";
                  } elseif($resultado){
                    foreach ($resultado as $row) {
                      $titulo = $row['titulo'];
                      $desc = $row['descripcion'];
                      $ruta = $row['ruta'];
                      $usuario_obra = $row['usuario_id'];
                      ?>
                      <div class = "divObras">
                        <img class = "obraUsu" src="<?php echo $ruta; ?>" alt=""><br>
                        <p><strong>Heartista:</strong> <?php echo $usuario_obra; ?></p>
                        <p><strong>Título:</strong> <?php echo $titulo; ?></p>
                        <p><strong>Descripción:</strong> <?php echo $desc; ?></p>
                      </div>
                      <?php
                    }
                    
                  }
            
            ?>
        

      </section>

      </body>
      <?php
            include('footer.php');
      ?>
<title>HEARTIST - Usuario</title>
<body>
      <?php
            session_start();
            include('layout.php');
            include('conexionBD.php');
      ?> 
      <section class = "contenido_usuario">
            <div id = "div1">
            <strong><h3 class = "h3perfil">INFORMACIÓN GENERAL:</h3></strong>
            <?php 
                  $usu = $_GET['usuario'];
                  $perfil = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = '$usu'");
            
                  $perfil->execute();
                  $resultado = $perfil->fetch(PDO::FETCH_ASSOC); 
                  
                  if(isset($resultado)){
            ?>
                  <table>
                  <tr><th>Usuario:</th><td><?php echo $resultado['usuario']; ?></td></tr>
                  <tr><th>Contacto:</th><td><?php echo $resultado['email']; ?></td></tr>
                  </table>
       <?php   
       } else {
         echo "Estamos intentando mostrar los datos de tu cuenta.";
       }
       ?>
            </div>
            <div id = "div2">
            <?php 
                  $obra_usu = $conexion->prepare("SELECT  titulo, descripcion, ruta FROM obras WHERE usuario_id = '$usu'");
                  $obra_usu->execute();
                  $resultado = $obra_usu->fetchAll(PDO::FETCH_ASSOC);
                  if(!$resultado) {
                        echo "No se pudieron cargar las obras.";
                      } elseif($resultado){
                        foreach ($resultado as $row) {
                          $titulo = $row['titulo'];
                          $desc = $row['descripcion'];
                          $ruta = $row['ruta'];
                          ?>
                          <div class = "divObras">
                            <img class = "obraUsu" src="<?php echo $ruta; ?>" alt=""><br>
                            <p><strong>Título:</strong> <?php echo $titulo; ?></p>
                            <p><strong>Descripción:</strong> <?php echo $desc; ?></p>
                          </div>
                          <?php
                        }
                      } 
            ?>
            </div>
      </section>
</body>
      <?php
            include('footer.php');
      ?>

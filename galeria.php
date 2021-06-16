
  <title>HEARTIST - Galería</title>
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
    <section class = "container">
      <div class = "contenido_galeria">
        <?php
        
        include('conexionBD.php');
        
        if (!isset($_SESSION['usuario'])){
        ?>
          <div class = divGaleria>
            <img src="./img/load.png" alt="Cargando" width = "120px">
            <h3>Consulta las obras que has subido</3>
            <h4>Si no inicias sesión, no podrás ver tu galería de obras.</h4>
            <a href = "formulario_inicio.php"><button id = "botonInicioSesion">INICIAR SESIÓN</button></a>
          </div>
          <p></p>
    
      <?php  
      } 
        if(isset($_SESSION['usuario'])) {
          $usu_sesion = $_SESSION['usuario'];
      
          $mostrar_obras = $conexion->prepare("SELECT titulo, descripcion, ruta FROM obras WHERE usuario_id = '$usu_sesion'");
          $mostrar_obras->execute();
          $resultado = $mostrar_obras->fetchAll(PDO::FETCH_ASSOC);

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
        }
          ?>
          
      </div>
      <div class = "columna">
  
      <form name="form_obra" class="form_obra" method="post" action="registro_obras.php" enctype="multipart/form-data">
          <label>Archivo:</label><br>
          <p></p>
          <input id = "inputArchivo" type="file" name="archivo" required><br>

          <label>Título de la obra:</label><br>
          <p></p>
          <input type="text" name="nombre" required size = 40 required><br>
          <p></p>

          <label>Categoría:</label><br>
          <select id = "cat_obra" name="categoria" id="" required>
          <option value="0">Selecciona una categoría: </option>
          <?php 
            $categorias = $conexion->query("SELECT * FROM categorias");
            $resul = $categorias->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resul as $cat) {
              echo '<option value="'.$cat['id_categoria'].'">'.$cat['nombre'].'</option>';
            }
          ?>
          </select>
          <p></p>

          <label>Descripción de tu obra:</label>
          <p></p>
          <textarea id = "textarea" name="descripcion" cols="35" rows="10" required>Prueba</textarea>
          <?php
          if (isset($_SESSION['usuario'])){
              echo '<button name="submit" id = btnObra>Cargar Obra</button>';
            } else {
              
            ?>
            <button name="submit" disabled id = btnObraDisabled>Cargar Obra</button>
              
            <?php
            } 
            ?>
      </form>
      </div>
    </section>

    <?php
      include('footer.php');
    ?>
  </body>
</html>
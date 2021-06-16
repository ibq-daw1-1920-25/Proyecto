<title>HEARTIST - Explorar</title>
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
      include('layout.php');
      include('conexionBD.php');
    ?>
    <section class = "container_exp">
    <h2>Explora otros heartistas!</h2>
      <div class = "contenido_explorar">
        <?php
            $mostrar_categorias = $conexion->prepare("SELECT id_categoria, nombre FROM categorias");
            $mostrar_categorias->execute();
            $resultado = $mostrar_categorias->fetchAll(PDO::FETCH_ASSOC); 

            if(!$resultado) {
            echo "No se pudieron cargar las categorías.";
            } elseif($resultado){
            
            foreach ($resultado as $row) {
               $url = "categorias.php?categoria=" . $row ['id_categoria'];
               echo "<a href = '$url'><div class = 'title'> " . $row['nombre']. "</div></a> ";
               
            }
         }
        ?> 
    </section>
    <?php
      include('footer.php');
    ?>
    </body>

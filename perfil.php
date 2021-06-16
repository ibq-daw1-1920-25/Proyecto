<?php 
session_start();
include('layout.php');
?>
<title>HEARTIST - Mi perfil</title> 
  <body>  
    <section class = "container">
      <div class = "contenido">
        <?php
          include('conexionBD.php');
          $usuarioID = $_SESSION['usuario'];
          $mostrar_usuario = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = '". $usuarioID."'");
         
          $mostrar_usuario->execute();
          $resultado = $mostrar_usuario->fetch(PDO::FETCH_ASSOC); 
        
          if(isset($resultado)){
        ?>
        <strong><h2>INFORMACIÓN GENERAL:</h2></strong>
        <strong><h3 class = "h3perfil">Perfil:</h3></strong>
        <table>
          <tr><th>Usuario:</th><td><?php echo $resultado['usuario']; ?></td></tr>
          <tr><th>Correo electrónico:</th><td><?php echo $resultado['email']; ?></td></tr>
          <tr><th>Fecha de nacimiento:</th><td><?php echo $resultado['fecha']; ?></td></tr>
        </table>        
        <?php 
          
        } else {
          echo "Estamos intentando mostrar los datos de tu cuenta.";
        }
        ?>
      </div>
      <div class = "columna">
        <h4>Editar Perfil:</h4>
        <form class="form_obra" action="modificar.php" method="POST">
          <label for="">Correo actual:</label><br>
          <input type="text" name="viejo" value="<?php echo $resultado['email']; ?>"><br>
          <label for="">Nuevo correo:</label><br>
          <input type="text" name="nuevo"><br>
          <button name="submit" id = "btnEditar">Actualizar</button>
        </form>
      </div>
    </section>
    <?php
      include('footer.php');
    ?>
    </body>
</html>
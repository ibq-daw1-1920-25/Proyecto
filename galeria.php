
<title>HEARTIST - Galería</title>
  <body>
  <?php
    include('layout.php');
  ?>  
    <section class = "container">
      <div class = "contenido_galeria">
        Obras subidas del usuario
      </div>
      <div class = "columna">
      <h4>Sube tus obras para que las conozcan más heartistas!</h4>
      <form name="form_obra" id="form_obra" method="post" action="registro_obras.php" enctype="multipart/form-data">
          <label>Archivo:</label>
          <input type="file" name="archivo" multiple>
          <label>Título de la obra:</label>
          <input type="text" name="nombre" required><br>
          <label>Descripción de tu obra:</label>
          <textarea id = "textarea" name="descripcion" cols="50" rows="10">Prueba</textarea>
          <button name="submit">Cargar Obra</button>
      </form>
      </div>


    </section>

    <?php
      include('footer.php');
    ?>
  </body>
</html>
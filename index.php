<?php 
include("./conexion/conexion.php");
$consulta=$conexion->prepare("SELECT * FROM galeria ;");
$consulta->execute();
$imagenes=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeria imagenes</title>
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/estilos.css" />
  </head>
  <body>
    <div class="header contenedor">
      <div class="header-contenedor">
        <h2 class="titulo">Galeria de imagenes</h2>
        <input class="input-busqueda" type="text" placeholder="busqueda" />
        <div class="botones-busqueda">
          <button class="todos btn-busqueda active">Todos</button>
          <button class="paisajes btn-busqueda">paisajes</button>
          <button class="ciudades btn-busqueda">ciudades</button>
          <button class="personas btn-busqueda">personas</button>
          <button class="animales btn-busqueda">animales</button>
        </div>
      </div>
    </div>
    <section class="contenedor">
      <div class="contenedor-imagenes">
        <!--   Imagenes -->
        <?php foreach($imagenes as $imagen){?>
        <div class="imagen" 
        data-id="<?php echo $imagen["data_id"];?>" 
        data-etiquetas="<?php echo $imagen["data_etiquetas"];?>"
        data-descripcion="<?php echo $imagen["data_descripcion"];?>">
        <img src="./assets/<?php echo $imagen["nombre_imagen"]; ?>" />
        </div>
        <?php } ?>
      </div>
    </section>
    <section class="overlay hidden">
      <div class="contenedor-imagen">
        <button class="btnClose">X</button>
        <img class="img-overlay" src="" alt="">
      </div>
      <div class="descripcion-imagen">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore.</p>
      </div>
    </section>
    <script src="./js/app.js"></script>
  </body>
</html>

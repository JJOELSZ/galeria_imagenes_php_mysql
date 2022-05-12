<?php
$host="mysql.webcindario.com";
$bd="joelsoto";
$usuario="joelsoto";
$pass="12345678";
try{
    $conexion =new PDO("mysql:host=$host;dbname=$bd",$usuario,$pass);
    <!--- echo "CONEXION EXITOSA"; -->

}catch(Exception $e){
    echo $e->getMessage();

}
?>
<!-- 
script base de datos

create  table galeria (
  data_id varchar(20) not null,
  data_etiquetas varchar(100) not null,
  data_descripcion varchar(200) not null,
  nombre_imagen varchar(200) not null
  )
  INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('paisajes', 'paisajes playa', 'Un paisaje hermoso', 'paisaje1.png'); 

  INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('paisajes', 'paisajes cataratas playa montañas', 'Un paisaje hermoso cascadas', 'paisaje2.png'); 

  INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('animales', 'animales panda oso', 'Un oso panda', 'animal2.png'); 

   INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('animales', 'animales leon tigre', 'Un leon', 'animal1.png'); 

     INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('ciudades', 'ciudad autos coches edificios', 'Una ciudad con coches', 'ciudad1.png'); 

     INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('ciudades', 'ciudad autos coches edificios playa mar', 'Una ciudad con coches', 'ciudad2.png'); 

      INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('personas', 'persona mujer humano', 'Una mujer abrazandose', 'persona1.png'); 

     INSERT INTO `galeria` (`data_id`, `data_etiquetas`, `data_descripcion`, `nombre_imagen`) VALUES ('personas', 'persona mujer humano', 'Una mujer','persona2.png'); 
   -->
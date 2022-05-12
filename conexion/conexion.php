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

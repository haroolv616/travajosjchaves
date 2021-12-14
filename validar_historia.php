<?php 

include 'conexion.php';

$nombre = $_POST["nombre"];

$imagen = $_POST["imagen"];

$archivo = $_POST["archivo"];

$insertar = "INSERT INTO archivos(nombre, imagen, archivo) VALUES('$nombre', '$imagen', '$archivo')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){

   echo 'Error';

} else{

   echo '<script> 

   alert("Usuario Registrado"); 

   window.history.go(-1);

    
   </script>';

}

?>
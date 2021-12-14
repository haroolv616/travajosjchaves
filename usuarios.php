<?php 

include 'conexion.php';

$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];

$correo = $_POST["correo"];

$usuario = $_POST["usuario"];

$pass = $_POST["pass"];

$insertar = "INSERT INTO usuario(nombre, apellido, correo, usuario, password) VALUES('$nombre', '$apellido', '$correo', '$usuario', '$pass')";

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
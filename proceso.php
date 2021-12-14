<?php 

include 'conexion.php';

$id = $_REQUEST['id'];

$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];

$correo = $_POST["correo"];

$usuario = $_POST["usuario"];

$pass = $_POST["pass"];

$insertar = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', usuario = '$usuario', password = '$pass' WHERE id = '$id'";

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
<?php 

include 'conexion.php';

$id = $_REQUEST['id'];

$insertar = "DELETE FROM usuario WHERE id = '$id'";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){

	echo 'Error';

} else{

	echo '<script> 

	alert("Usuario Eliminado"); 

	window.history.go(-1);

	 
	</script>';

}

?>
<?php 

$conexion = mysqli_connect("localhost", "root", "", "cuentos");

if (!$conexion){
	echo 'Error de Conexion';
}
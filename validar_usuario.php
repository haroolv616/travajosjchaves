<?php

 session_start();

include 'conexion.php';

 $usu = $_POST["usuario"];
 $pass = $_POST["pass"];

 $consulta = $conexion->query("SELECT * FROM usuario where usuario = '$usu' and password = '$pass'");

if ($resultado = mysqli_fetch_array($consulta)){

    $_SESSION['usuario']= $usu;

    header("Location:perfil.php");

} else{

    
   echo '<script> 

    alert("Acceso no Autorizado"); 

    window.history.go(-1);

     
    </script>';

    
}


 
?>
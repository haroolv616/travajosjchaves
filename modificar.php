<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap\bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap\cuenta.css">
	<title>Editar Campos</title>
</head>
<body>



    <div class="container">
    
    <div class="row">

    <div class="col-sm-6 col-md-6 col-lg-6" id="form-register">

    <h4>Iniciar Sesion</h4>

    <?php 

    $id = $_REQUEST['id'];

    include 'conexion.php';

   $consulta ="SELECT * FROM usuario WHERE id = '$id'";

   $resultado = $conexion->query($consulta);

   $mostrar = $resultado->fetch_assoc();

   ?>

    <form action="proceso.php?id=<?php echo $mostrar['id']; ?>" method="POST">

    <input id="controls" type="text" name="nombre" id="usuario" placeholder="Nombre(s)*" value="<?php echo $mostrar['nombre']; ?>" required>

    <input id="controls" type="text" name="apellido" id="usuario" placeholder="Apellidos*" value="<?php echo $mostrar['apellido']; ?>" required>

    <input id="controls" type="text" name="correo" id="usuario" placeholder="Correo*" value="<?php echo $mostrar['correo']; ?>" required>

    <input id="controls" type="text" name="usuario" id="password" placeholder="Usuario*" value="<?php echo $mostrar['usuario']; ?>" required>

    <input id="controls" type="text" name="pass" id="password" placeholder="Contraseña*" value="<?php echo $mostrar['password']; ?>" required>

    <input class="botons" type="submit" value="Registrar">

    <input class="botons" type="button" value="Nuevos Datos" onclick="location.reload()"/>

    <p><a href="editar.php">Regresar</a></p>

    </form>

    </div>
    
    </div>

    </div>


<script src="js\alertas.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/tabla.css">
  <title>Editar Perfil</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

  <div class="container-fluid">

  <a class="navbar-brand">

  <img src="../icons/person-circle.svg" class="text my-auto mx-2" width="25" height="25">Usuarios</a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
  aria-label="Toggle navigation">

  <span class="navbar-toggler-icon"></span>

  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item dropdown">

      <a class="nav-link active" href="nueva_historia.php">

      <img src="../icons/house.svg" class="text my-auto mx-2" width="20" height="20">inicio</a>

      </li> 
        
    </ul>

  </div>

 </div>

</nav>



<h3>Usuarios Registrados</h3>

<table class="table">

  <thead>

    <tr>

      <th scope="col">N°</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>

    </tr>

  </thead>

  <?php 

    include 'conexion.php';

   $consulta = $conexion->query("SELECT * FROM usuario");

    while($mostrar=mysqli_fetch_array($consulta)){

   ?>

  <tbody>

    <tr>

    <td><?php echo $mostrar["id"]; ?></td>
    <td><?php echo $mostrar["nombre"]; ?></td>
    <td><?php echo $mostrar["apellido"]; ?></td>
    <td><?php echo $mostrar["correo"]; ?></td>
    <td><?php echo $mostrar["usuario"]; ?></td> 
    <td><?php echo $mostrar["password"]; ?></td> 
    <td><a href="modificar.php?id=<?php echo $mostrar['id']; ?>">Modificar</a></td>
    <td><a href="eliminar.php?id=<?php echo $mostrar['id']; ?>">Eliminar</a></td> 

    </tr>

  </tbody>

   <?php 

  }

   ?>

</table>

<script src="../bootstrap_js\bootstrap.min.js"></script>
</body>
</html>
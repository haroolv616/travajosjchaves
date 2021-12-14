 <?php

 session_start();

  if (isset($_SESSION['usuario'])){
    
  }else{

    header("Location:cerrar_sesion.php");
  }

  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../bootstrap\bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap\tabla.css">
  <title>Tabla de Historias</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

  <div class="container-fluid">

  <a class="navbar-brand"><?php echo $_SESSION['usuario'] ?></a>

  <!--- Boton Responsive --->

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
  aria-label="Toggle navigation">

  <span class="navbar-toggler-icon"></span>

  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item dropdown">

      <a class="nav-link active" href="perfil.php">

      <img src="../icons/person.svg" class="text my-auto mx-2" width="20" height="20">Mi Perfil</a>

      </li> 

    </ul>

  </div>

 </div>

</nav>


<h3>Historias de Terror Disponibles</h3>

<table class="table">

  <thead>

    <tr>

      <th scope="col">N°</th>
      <th scope="col">Nombre</th>
      <th scope="col">Imagen</th>
      <th scope="col">Archivo</th>


    </tr>

  </thead>

  <?php 

    include 'conexion.php';

   $consulta = $conexion->query("SELECT * FROM archivos");

    while($mostrar=mysqli_fetch_array($consulta)){

   ?>

  <tbody>

    <tr>

    <td><?php echo $mostrar["id"]; ?></td>

    <td><?php echo $mostrar["nombre"]; ?></td>

    <td><img height="90px" src="../img/<?php echo $mostrar["imagen"]; ?>"></td>

    <td><a href="#" download="<?php echo $mostrar["archivo"]; ?>">Descargar: <?php echo $mostrar["archivo"]; ?></a></td>
    
    </tr>

  </tbody>

  <?php 

  }

   ?>

</table>



<script src="../bootstrap_js\bootstrap.min.js"></script>
</body>
</html>
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
   <link rel="stylesheet" href="../bootstrap\portadas.css">
   <title>Portadas de las Historias Disponibles</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

  <div class="container-fluid">

  <a class="navbar-brand"><?php echo $_SESSION['usuario'] ?></a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
  aria-label="Toggle navigation">

  <span class="navbar-toggler-icon"></span>

  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    <li class="nav-item dropdown">

      <a class="nav-link active" href="perfil.php">

      <img src="../icons/house.svg" class="text my-auto mx-2" width="20" height="20">Perfil</a>

      </li>

    </ul>

  </div>

 </div>

</nav>


<h2 class="titulo">Portadas</h2>

<?php 

    include 'conexion.php';

   $consulta = $conexion->query("SELECT imagen FROM archivos");

    while($mostrar=mysqli_fetch_array($consulta)){

   ?>

<div class="container">

   <div class="row">

    <div class="col-md-4" style="padding: 20px;">

     <div class="card h-100">

      <img src="../img/<?php echo $mostrar['imagen']; ?>">

     </div>



    </div>

</div>

</div>


<?php 

  }

   ?>



<script src="../bootstrap_js\bootstrap.min.js"></script>
</body>
</html>
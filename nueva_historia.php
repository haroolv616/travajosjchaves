<?php

 session_start();

  if (isset($_SESSION['usuario'])){
    
  }else{

    header("Location:cerrar_admin.php");
  }

  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap\bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap\cuenta.css">
	<title>Nueva Historia</title>
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

      <a class="nav-link active" href="cerrar_admin.php">

      <img src="../icons/person.svg" class="text my-auto mx-2" width="20" height="20">Cerrar Sesion</a>

      </li> 

      <li class="nav-item dropdown">

      <a class="nav-link active" href="editar.php">

      <img src="../icons/person.svg" class="text my-auto mx-2" width="20" height="20">Editar Perfiles</a>

      </li> 

    </ul>

  </div>

 </div>

</nav>

    <div class="container">
    
    <div class="row">

    <div class="col-sm-6 col-md-6 col-lg-6" id="form-register">

    <h4>Registrar una Nueva Historia</h4>

    <form action="validar_historia.php" method="POST">


    <input id="controls" type="text" name="nombre" placeholder="Nombre(s)*" required>


    <h3 style="color: black;">Portada del Cuento</h3>

    <input class="controls" type="file" name="imagen" required><br><br>


    <h3 style="color: black;">Archivo PDF</h3>

    <input class="controls" type="file" name="archivo" required><br>


    <input class="botons" type="submit" value="Registrar">


    </form>

    </div>
    
    </div>

    </div>

</body>
</html>
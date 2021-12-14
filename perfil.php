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
  <link rel="stylesheet" href="../bootstrap\inicio.css">
  <title>HISTORIAS</title>
<head>
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


      <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

        <img src="../icons/list-ul.svg" class="text my-auto mx-2" width="20" height="20">Mi Perfil</a>

    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

       <li><a class="dropdown-item" href="cerrar_sesion.php">

       <img src="../icons/person.svg" class="text my-auto mx-2" width="20" height="20">Cerrar Sesion</a></li>

    </ul>

       </li>

      <li class="nav-item dropdown">

      <a class="nav-link active" href="historias.php">

      <img src="../icons/file-earmark-pdf.svg" class="text my-auto mx-2" width="20" height="20">Historias Disponibles</a>

      </li> 

      <li class="nav-item dropdown">

      <a class="nav-link active" href="portadas.php">

      <img src="../icons/image-fill.svg" class="text my-auto mx-2" width="20" height="20">Portadas</a>

      </li> 

        
    </ul>

  </div>

 </div>

</nav>



<script src="../bootstrap_js\bootstrap.min.js"></script>
</body>
</html>
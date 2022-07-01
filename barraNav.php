<?php

	
 ?>


<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<title></title>
<body>


<nav class="navbar navbar-dark bg-warning" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">L.Tiburcio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <!--
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
       --> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="registro.php">Registrarse</a></li>
            <li><a class="dropdown-item" href="iniciarSesion.php">Iniciar Sesion</a></li>
            <?php  
            if (isset($_SESSION['email'])) {
              
            echo'
            <li><a class="dropdown-item" href="dos.php">Otra Página</a></li>
            <li><a class="dropdown-item" href="lista.php">Listar</a></li>
            <li><hr class="dropdown-divider"></li>
            

            <form method="POST">
            <button class="btn btn primary" name="salir" type="submit">Salir</button> 
          </form>
            
            ';}?>
          </ul>
        </li>
        
      </ul>
      <!--
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  -->
    </div>
  </div>
</nav>

</body>
</html>
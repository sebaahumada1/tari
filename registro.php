<?php 
session_start();
include_once('barraNav.php');
include_once('conexion.php');
include_once('consultas.php');


$name=$guardo['nombre'] ??"";  //Nombre: es el nombre de la base de datos

$lastname=$guardo['apellido'] ??"";
$mail=$guardo['email'] ??"";


$setid=$_POST['id'] ?? "";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<h2 class="text text-center text text-primary mb-5 mt-5">Registrar Nuevo Usuario</h2>
<div class="container">
	<div class="col-sm-12 col-md-6">
	   <form method="POST" class="d-flex" role="search">
        <input class="form-control me-2" name="id" type="search" placeholder="Buscar por Nombre" aria-label="Search">
        <button class="btn btn-outline-success" name="buscar" type="submit">Buscar</button>
      </form>
</div>
</div>

<div class="container">
	<div class="col-sm-12 col-md-6 mt-5 mb-5">
<form method="POST">
  <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">Nombre</label>

    <input type="text" class="form-control" name="nombre1" placeholder="Ingrese Nombre" value="<?php echo $name; ?>">
    <div class="form-text"></div>
  </div>

   <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $lastname; ?>" name="apellido2" placeholder="Ingrese Apellido">
    <div class="form-text"></div>
  </div>

 <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">Email</label>
    <input type="email" class="form-control" value="<?php echo $mail ?>" name="email2" placeholder="juancito@perez.com">
    <div class="form-text"></div>
  </div>

  <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">Contraseña</label>
    <input type="password" class="form-control" name="clave2" placeholder="***************">
    <div class="form-text"></div>
  </div>

<div><button class="btn btn-primary" type="submit" name="guardar">Guardar</button>

<button class="btn btn-success" type="submit" name="modificar" value="<?php echo $setid; ?>">Modificar</button>


<button class="btn btn-warning" type="submit" value="<?php echo $setid ?>" name="borrar">Eliminar</button>
  <?php if (isset($error)) {
    echo $error;
    
  }    ?>

</div>
</form>


</div>
</div>




<section>
  <form method="POST">

        <div class="d-grid gap-1 col-6 mx-auto mt-5">
            
              
            <button class="btn btn-outline-primary fw-bold fst-italic mt-3" type="submit" name="listarAhora">Listar</button>

        </div>



<?php
         if (isset($vari)){
          echo '

          <div class="container">
  <div class="col-sm-12 col-md-8 mt-5">
  <table class="table table-dark">
    <button type="submit" name="cerrarLista" class="btn btn-warning justify-content-end">Cerrar Listar</button>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo Electronico</th>
   
    </tr>';
 
      while($si=mysqli_fetch_array($vari)){
        echo '
        <tr>
       
          <th>'.$si['usu'].'</th>
          <th>'.$si['nombre'].'</th>
          <th>'.$si['apellido'].'</th>
          <th>'.$si['email'].'</th>

          
      </tr>
      <div class="container">
  <div class="col-sm-12 col-md-6">
      ';
    }
    echo "</table>";

   }

    ?>
    <tr>
  



      </div>
    </div>

  </div>





</form>

<form>
	
	
</section>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
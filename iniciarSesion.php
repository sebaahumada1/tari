<?php 
session_start();
if (isset($_SESSION['email'])) {
	
		echo $_SESSION['email'];

	
}else
	echo "todavia no inicio sesion";




include_once('barraNav.php');
include_once ('consultas.php');



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<h2 class="text text-center text text-info mb-5 mt-5 fw-bold fst-italic">Iniciar Sesión</h2>


<div class="container">
	<div class="rows">
		<div class="d-grid gap-2 col-6 mx-auto col-sm-12">
<form method="POST">
 <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic" >Email</label>
    <input type="email" class="form-control" name="mail" placeholder="juancito@perez.com">
    <div class="form-text"></div>
  </div>

  <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">Contraseña</label>
    <input type="password" class="form-control" name="pass" placeholder="***************">
    <div class="form-text"></div>
  </div>


</div>
	</div>
</div>
<div class="container">
	<div class="rows">
		<div class="d-grid gap-2 col-4 mx-auto col-sm-12">
			<button class="btn btn-primary fw-bold fst-italic " type="submit" name="ingresar">Ingresar</button>
			
		</div>
	</div>
</div>
</form>


<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
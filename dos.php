<?php 
	session_start();
	include_once('barraNav.php');
	include_once('conexion.php');
	include_once('consultas.php');
	
 ?>


<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <title>Pagina Web</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
		<h2 class="text text-center text text-primary mb-5 mt-5">PRODUCTOS</h2>
<form method="POST">

      

        <div class="container">
	<div class="col-sm-12 col-md-6 mt-5 mb-5">
<form method="POST">
  <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">id</label>
    <input type="text" class="form-control" name="ide" placeholder=" " value="">
    <div class="form-text"></div>
  </div>
  <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">producto</label>
    <input type="text" class="form-control"  name="producto" placeholder="ejemplo Bujias">
    <div class="form-text"></div>
  </div>

   <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">Proveedor</label>
    <input type="text" class="form-control"  name="proveedor" placeholder="ejemplo Bosch ">
    <div class="form-text"></div>
  </div>

 <div class="mb-3">
    <label class="form-label text text-dark fw-bold fst-italic">Precio</label>
    <input type="text" class="form-control"  name="precio" placeholder="ejemplo $4320">
    <div class="form-text"></div>
  </div>

  

<div><button class="btn btn-primary" type="submit" name="guardar2">Guardar</button>
<button class="btn btn-success" type="submit" name="modificar">Modificar</button>
<button class="btn btn-warning" type="submit" name="borrar">Eliminar</button>
  <?php if (isset($error)) {
    echo $error;
    
  }    ?>

</div>
</form>

<?php 

if (isset($_POST['guardar2'])) {

$pro=$_POST['producto'];
$prov=$_POST['proveedor'];
$pre=$_POST['precio'];

$sql="INSERT INTO mercaderia (producto,proveedor,precio) VALUES ('".$pro."','".$prov."','".$pre."')";

	mysqli_query($conexionUsuarios,$sql);

	
}


	
	
	
	

 ?>





</div>
</div>

 


</form>

<form>





</div>
</div>

</form>

<a href="lista.php">
<button class="btn btn-outline-primary fw-bold fst-italic mt-3" type="submit" name="listarAhora" >Regresar</button>
</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
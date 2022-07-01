<?php
  include_once('conexion.php');
  include('consultas.php');
  
  $nombreEmp=$guardo['nombre'] ?? "";
  $apellidoEmp=$guardo['apellido'] ?? "";
  $correoEmp=$guardo['correo'] ?? "";

  $acaLeSeteoElId=$_POST['id3'] ?? "";

  $contraseñaEmp=$_POST ['contraseña'] ?? "";


?>




<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">




<link rel="stylesheet" type="text/css" href="est.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
	<title>Lista de Precios</title>
<body>

	<?php 
	      echo '
	<table class="table">
    <button type="submit" name="botonVer" class="btn  btn-success justify-content-end">Listar</button>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">$nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo Electronico</th>
   
    </tr>';
echo "</table>";
	 ?>

<?php



				 if (isset($vari)){
          
          echo '
	<table class="table">
    <button type="submit" name="botonVer" class="btn  btn-success justify-content-end">Listar</button>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">$nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo Electronico</th>
   
    </tr>';


 
      while($si=mysqli_fetch_array($vari)){
        echo '
        <tr>
       
          <th>'.$si['id'].'</th>
          <th>'.$si['nombre'].'</th>
          <th>'.$si['apellido'].'</th>
          <th>'.$si['correo'].'</th>

          
      </tr>
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




  



<script type="text/javascript" src="java.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>


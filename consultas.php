<?php 

include_once('conexion.php');

$name=$guardo['nombre'] ??"nada";

$lastname=$guardo['apellido'] ??"";
$mail=$guardo['email'] ??"";



if (isset($_POST['guardar'])) {
  
  $nombre=$_POST['nombre1'];
  $apellido=$_POST['apellido2'];
  $email=$_POST['email2'];
  $clave=$_POST['clave2'];

  $sql="INSERT INTO usuarios (nombre,apellido,email,clave) VALUES ('".$nombre."','".$apellido."','".$email."','".$clave."')";
  mysqli_query($conexionUsuarios,$sql);

  echo "<h4 text text-danger>se guardo correctamente el usuario: ".$nombre."</h4>";


}else{


    
      

};





if (isset($_POST['buscar'])) {

  
  $sql="SELECT * FROM usuarios where nombre='".$_POST['id']."'";
  $query=mysqli_query($conexionUsuarios,$sql);
  if (mysqli_num_rows($query)>0) {
    
      $guardo=mysqli_fetch_array($query);
    
  }
 
  
  }


if (isset($_POST['modificar'])) {

$id=$_POST['modificar'];
$name=$_POST['nombre1'];
$lastname=$_POST['apellido2'];
$mail=$_POST['email2'];
$cla=$_POST['clave2'];

  $sql="UPDATE usuarios set nombre='".$name."', apellido='".$lastname."',email='".$mail."',clave='".$cla."' where nombre= '".$id."' ";

  mysqli_query($conexionUsuarios,$sql);
  



}

if (isset($_POST['borrar'])) {
  $id=$_POST['borrar'];
  $sql="DELETE from usuarios where nombre='".$id."'";
  mysqli_query($conexionUsuarios,$sql);
}




  /////////////////////INICIAR SESION///////////////////////


  if (isset($_POST['ingresar'])) {
    
          $sql="SELECT * FROM usuarios where email='".$_POST['mail']."' and clave='".$_POST['pass']."' ";
          $sp=mysqli_query($conexionUsuarios,$sql);
         if(mysqli_num_rows($sp)>0) {
          $datos=mysqli_fetch_array($sp);

          $_SESSION['email']=$_POST['mail'];
          $_SESSION['usu']=$datos['usu'];
          header("location:lista.php");
          
         



          }else{
             echo "usuario o clave incorrectas";
          }




  }


 //listar///////////////////////////////////

   



  if (isset($_POST['listarAhora'])){
    $vari=mysqli_query($conexionUsuarios,"SELECT * FROM usuarios");
    //while($si=mysqli_fetch_array($vari)){
    
    
    }


    if (isset($_POST['salir'])) {
      session_destroy();
      header("location:iniciarSesion.php");      
    }

 ?>






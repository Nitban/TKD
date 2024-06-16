<?php 

include ("db.php"); 

if (isset($_POST['btntorneo'])){
    if (strlen($_POST['nombre-torneo'])>=1&&
    strlen($_POST['apellido-torneo'])>=1&&
    strlen($_POST['combate-torneo'])>=1&&
    strlen($_POST['formas-torneo'])>=1&&
    strlen($_POST['precio-torneo'])>=1&&
    strlen($_POST['ganancia-torneo'])>=1)
    {
     
     $nombre = (trim($_POST['nombre-torneo']));
     $apellido = (trim($_POST['apellido-torneo']));

     $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
     if(!$db){
         echo "Error en la conexión";
     }
     $consulta=mysqli_query($db, "SELECT *
      FROM `alumnos` where `nombres`='$nombre' AND `ApellidoP`='$apellido'");
      while($row = mysqli_fetch_array($consulta))
      {
        $id =$row['id'];
      }

      
     $combate = trim($_POST['combate-torneo']);
     $formas = trim($_POST['formas-torneo']);
     $precio = trim($_POST['precio-torneo']);
     $ganancia = trim($_POST['ganancia-torneo']);

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO `tkdmaster`.`torneos` (`alumnoID`, `combate`, `formas`,`precio`,`ganancia`) 
     VALUES ('$id','$combate','$formas','$precio','$ganancia')";
     
     $resultado = mysqli_query($db,$consulta);
    if ($resultado){
       echo ("Se ha subido correctamente");
    }else {

        echo ("Error al subir el usuario"); 
    }
    }else {
        echo ("Llena todos los datos"); 
    }
}


?>
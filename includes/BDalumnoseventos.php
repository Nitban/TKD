<?php 

if (isset($_POST['btneventoalumno'])){
    if (strlen($_POST['nombre-evento-alumno'])>=1&&
    strlen($_POST['evento-evento-alumno'])>=1)
    {
     
     $nombre = (trim($_POST['nombre-evento-alumno']));
     $evento = trim($_POST['evento-evento-alumno']);
    
     $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
     if(!$db){
         echo "Error en la conexión";
     }
     $consulta=mysqli_query($db, "SELECT *
      FROM `eventos` where `nombre`='$evento'");
      while($row = mysqli_fetch_array($consulta))
      {
        $idevento =$row['id'];
      }

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO `tkdmaster`.`participando` (`alumnoId`, `eventoId`) 
     VALUES ('$nombre','$idevento')";
     echo $consulta;
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
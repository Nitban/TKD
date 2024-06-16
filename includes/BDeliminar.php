<?php 

include ("db.php"); 
if (isset($_POST['btneliminar'])){
    if (strlen($_POST['nombre-eliminar'])>=1&&
    strlen($_POST['apellido-eliminar'])>=1)
    {
     
     $apellido = (trim($_POST['apellido-eliminar']));
     $nombre = trim($_POST['nombre-eliminar']);

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    
    $consulta=mysqli_query($db, "DELETE from `tkdmaster`.`alumnos` where `nombres`='$nombre' AND `ApellidoP`='$apellido'");
    $resultado = mysqli_query($db,$consulta);
    if ($resultado){
       echo ("Se ha eliminado");
    }
    }else {
        echo ("Llena todos los datos"); 
    }
}
?>
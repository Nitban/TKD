<?php 

include ("db.php"); 

if (isset($_POST['btnmensualidad'])){
    if (strlen($_POST['nombres-mensualidad'])>=1&&
    strlen($_POST['apellido-mensualidad'])>=1&&
    strlen($_POST['importe-mensualidad'])>=1&&
    strlen($_POST['fechapago-mensualidad'])>=1)
    {
        
        $nombre = (trim($_POST['nombres-mensualidad']));
        $apellido = (trim($_POST['apellido-mensualidad']));
   
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

     $fechapago = trim($_POST['fechapago-mensualidad']);
     $importe = trim($_POST['importe-mensualidad']);


     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO `tkdmaster`.`mensualidad` (`alumnoId`, `importe`,`fechaPago`, `pagado`) 
     VALUES ('$id','$importe','$fechapago','1')";
     
     $resultado = mysqli_query($db,$consulta);
    if ($resultado){
       echo ("Se ha subido correctamente sin antes borrar");
    }else {

        echo ("Error al subir el usuario"); 
    }   
}else {
        echo ("Llena todos los datos"); 
    }
}


?>
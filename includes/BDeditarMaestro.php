<?php 

include ("db.php"); 

if (isset($_POST['edit'])){
    echo ("me picaste");
    if (strlen($_POST['nombres'])>=1&&
    strlen($_POST['apellidoP'])>=1&&
    strlen($_POST['apellidoM'])>=1&&
    strlen($_POST['cinta'])>=1&&
    strlen($_POST['sucursal'])>=1)
    {
     $idprofe =$_SESSION['idProfesor'];
     $nombres = trim($_POST['nombres']);
     $apellidoP = trim($_POST['apellidoP']);
     $apellidoM = trim($_POST['apellidoM']);
     $cinta = trim($_POST['cinta']);
     $sucursal = trim($_POST['sucursal']);

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "UPDATE `tkdmaster`.`maestros` 
     SET `nombres`='$nombres',`apellidoP`='$apellidop',`cinta`='$cinta',`sucursal`='$sucursal'
     WHERE `id`= '$idprofe' ";
     
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
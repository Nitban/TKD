<?php 

include ("db.php"); 

if (isset($_POST['guardartienda'])){
    if (strlen($_POST['nombre-tienda'])>=1&&
    strlen($_POST['desc-tienda'])>=1&&
    strlen($_POST['precio-tienda'])>=1&&
    strlen($_POST['marca-tienda'])>=1)
    {
     
     $nombre = trim($_POST['nombre-tienda']);
     $desc = trim($_POST['desc-tienda']);
     $precio = trim($_POST['precio-tienda']);
     $marca = trim($_POST['marca-tienda']);

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO `tkdmaster`.`productos` (`nombre`, `descripcion`, `precio`, `marca`) 
     VALUES ('$nombre','$desc','$precio','$marca')";
     
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
<?php 

if (isset($_POST['btneventos'])){
    if (strlen($_POST['nombre-evento'])>=1&&
    strlen($_POST['ubicacion-evento'])>=1&&
    strlen($_POST['organizador-evento'])>=1&&
    strlen($_POST['precio-evento'])>=1&&
    strlen($_POST['tipo-evento'])>=1)
    {
     
     $nombre = (trim($_POST['nombre-evento']));
     $ubicacion = (trim($_POST['ubicacion-evento']));
     $organizador = trim($_POST['organizador-evento']);
     $precio = trim($_POST['precio-evento']);
     $tipo = trim($_POST['tipo-evento']);

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO `tkdmaster`.`eventos` (`nombre`, `ubicacion`, `organizador`,`precioUnitario`,`tipoEvento`) 
     VALUES ('$nombre','$ubicacion','$organizador','$precio','$tipo')";
     
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
<?php 

include ("db.php"); 

if (isset($_POST['guardaralumno'])){
    if (strlen($_POST['nombre-alumno'])>=1&&
    strlen($_POST['apellido-p-alumno'])>=1&&
    strlen($_POST['apellido-m-alumno'])>=1&&
    strlen($_POST['fecha-inscripcion-alumno'])>=1&&
    strlen($_POST['rfc-alumno'])>=1&&
    strlen($_POST['curp-alumno'])>=1&&
    strlen($_POST['id-maestro'])>=1&&
    strlen($_POST['id-cinta'])>=1)
    {
     
     $nombre = strtoupper ($nombre = (trim($_POST['nombre-alumno'])));
     $apellidop = strtoupper ($apellidop = trim($_POST['apellido-p-alumno']));
     $apellidom =strtoupper ($apellidom = trim($_POST['apellido-m-alumno']));
     $fecha = trim($_POST['fecha-inscripcion-alumno']);
     $rfc = strtoupper ($rfc = trim($_POST['rfc-alumno']));
     $curp = strtoupper ($curp = trim($_POST['curp-alumno']));
     $maestro = trim($_POST['id-maestro']);
     $cinta = trim($_POST['id-cinta']);
     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO `tkdmaster`.`alumnos` (`nombres`, `ApellidoP`, `ApellidoM`, `FechaInscripcion`, `rfc`, `curp`, `maestroId`, `cintaId`) 
     VALUES ('$nombre','$apellidop','$apellidom','$fecha','$rfc','$curp','$maestro','$cinta')";
     
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
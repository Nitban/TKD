<?php

if (isset($_POST['editar2'])){
    if (strlen($_POST['id-alumno'])>=1&&
    strlen($_POST['nombre-alumno'])>=1&&
    strlen($_POST['apellido-p-alumno'])>=1&&
    strlen($_POST['apellido-m-alumno'])>=1&&
    strlen($_POST['fecha-inscripcion-alumno'])>=1&&
    strlen($_POST['rfc-alumno'])>=1&&
    strlen($_POST['curp-alumno'])>=1&&
    strlen($_POST['id-maestro'])>=1&&
    strlen($_POST['id-cinta'])>=1)

    {
     $id = (trim($_POST['id-alumno']));
     $nombre = (trim($_POST['nombre-alumno']));
     $apellidop = trim($_POST['apellido-p-alumno']);
     $apellidom = trim($_POST['apellido-m-alumno']);
     $fecha = trim($_POST['fecha-inscripcion-alumno']);
     $rfc = trim($_POST['rfc-alumno']);
     $curp = trim($_POST['curp-alumno']);
     $maestro = trim($_POST['id-maestro']);
     $cinta = trim($_POST['id-cinta']);
     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "UPDATE `tkdmaster`.`alumnos` SET 
     `nombres`='$nombre',`ApellidoP`='$apellidop',`ApellidoM`='$apellidom',`FechaInscripcion`='$fecha',`rfc`='$rfc',`curp`='$curp',`maestroId`='$maestro',`cintaId`='$cinta' 
     WHERE `id`= '$id' ";
     $resultado = mysqli_query($db,$consulta);
    if ($resultado){
       echo ("Se ha editado correctamente");
    }else {

        echo ("Error al subir el usuario"); 
    }
}else {
        echo ("Llena todos los datos 2"); 
    }
}

?>
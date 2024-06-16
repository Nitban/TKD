<?php 

include ("db.php"); 

if (isset($_POST['btnexamen'])){
    if (strlen($_POST['nombre-alumno-examen'])>=1&&
    strlen($_POST['apellido-alumno-examen'])>=1&&
    strlen($_POST['id-maestro-examen'])>=1&&
    strlen($_POST['nombre-cinta-examen'])>=1&&
    strlen($_POST['promedio-examen'])>=1&&
    strlen($_POST['fecha-examen'])>=1&&
    strlen($_POST['aprobo-examen'])>=1)
    {
        /*sacamos el id del alumno*/
    $nombrealumno = trim($_POST['nombre-alumno-examen']);
    $apellidoalumno = trim($_POST['apellido-alumno-examen']);
    
    $maestro = trim($_POST['id-maestro-examen']);
    $nombrecinta = trim($_POST['nombre-cinta-examen']);

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
     if(!$db){
         echo "Error en la conexión";
     }
     $consulta=mysqli_query($db, "SELECT *
    FROM `alumnos` where `nombres`='$nombrealumno' AND `ApellidoP`='$apellidoalumno'");
      while($row = mysqli_fetch_array($consulta))
      {
        $id =$row['id'];
      }

      /*sacamos el id de cintas*/
    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta=mysqli_query($db, "SELECT *
     FROM `cintas` where `nombre`='$nombrecinta'");
     while($row = mysqli_fetch_array($consulta))
     {
       $idcinta =$row['id'];
     }

        /**VAMOS A GUARDAR LOS DEMAS DATOS*/
     $promedio = trim($_POST['promedio-examen']);
     $fecha = trim($_POST['fecha-examen']);
     $aprobo = trim($_POST['aprobo-examen']);

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO `tkdmaster`.`examenes` (`alumnoID`, `maestroID`, `cintaID`, `promedio`,`fechaExamen`,`aprobo`) 
     VALUES ('$id','$maestro','$idcinta','$promedio','$fecha','$aprobo')";
     
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
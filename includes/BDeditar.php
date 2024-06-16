<?php 

include ("db.php"); 

include ("includes/BDeditar2.php");

if (isset($_POST['btneditar'])){
    if (strlen($_POST['apellido-editar'])>=1&&
    strlen($_POST['nombre-editar'])>=1)
    {
     
     $nombre = (trim($_POST['nombre-editar']));
     $apellido = trim($_POST['apellido-editar']);
     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

    $consulta=mysqli_query($db, "SELECT *
    FROM `alumnos` WHERE `nombres` = '$nombre'
    AND `ApellidoP` = '$apellido'");

     while($row = mysqli_fetch_array($consulta))
     {
       echo '("Se ha subido correctamente")';

       echo '<div class="alumno-box" id="registro">';
       echo '<h2>TKD Master</h2>';
       echo '<h2>Registrar alumno</h2>';

       echo '<form class="datos-agregar" method="POST">';

       echo   '<div class="dato-box arriba-box">';
       echo    '<p class="radio-box">ID del alumno: <input type="text" name="id-alumno" value="'.$row['id'].'" readonly></p>';
       echo '</div>';

       echo   '<div class="dato-box">';
       echo    '<input type="text" name="nombre-alumno" required="">';
       echo    '<label>Nombres: '.$row['nombres'].' </label>';
       echo '</div>';
   
       echo  '<div class="dato-box">';
       echo    '<input type="text" name="apellido-p-alumno" required="">';
       echo    '<label>Apellido Paterno: '.$row['ApellidoP'].'</label>';
       echo '</div>';
   
       echo  '<div class="dato-box">';
       echo    '<input type="text" name="apellido-m-alumno" required="">';
       echo    '<label>Apellido Materno: '.$row['ApellidoM'].'</label>';
       echo  '</div>';
   
       echo '<div class="dato-box">';
       echo   '<input type="date" name="fecha-inscripcion-alumno" required="">';
       echo   '<label>Fecha de inscripcion: '.$row['FechaInscripcion'].'</label>';
       echo '</div>';
   
       echo '<div class="dato-box">';
       echo   '<input type="text" name="rfc-alumno" required="">';
       echo   '<label>RFC: '.$row['rfc'].'</label>';
       echo '</div>';
   
       echo '<div class="dato-box">';
       echo   '<input type="text" name="curp-alumno" required="">';
       echo   '<label>CURP: '.$row['curp'].'</label>';
       echo '</div>';
        
       echo '<div class="radio-box centro-box">';
        $idprofe =$_SESSION['idProfesor'];
            
       $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
       if(!$db){
           echo "Error en la conexión";
       }
       $consulta=mysqli_query($db, "SELECT *
        FROM `maestros`
        WHERE `id` = '$idprofe'");
        while($row = mysqli_fetch_array($consulta))
        {
        echo'<div class="dato-box">
             <p style="color: white">Nombre del maestro: '.$row['nombres'].'</p>
             <input style="visibility:hidden" type="text" name="id-maestro" value="'.$row['id'].'">
        </div>';
        }
     echo '</div>';
   


       echo '<div class="radio-box">';
       include ("db.php"); 
        if (mysqli_connect_errno()) {
           printf("Falló la conexión: %s\n", mysqli_connect_error());
           exit();
       }
     
       $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
       if(!$db){
           echo "Error en la conexión";
       }
       $consulta=mysqli_query($db, "SELECT *
        FROM `cintas`");
        echo '<p> Cintas:<br>';
        while($row = mysqli_fetch_array($consulta))
        {
      echo  '<input type="radio" name="id-cinta" value="'.$row['id'].'">'.$row['nombre'].'<br>';
        }
        echo '</p>';
       echo '</div>';
       echo '<input class="boton btn btn-white btn-animate" type="submit" name="editar2" id="editar2" value="Guardar">';
       echo '<input class="boton btn btn-white btn-animate" onclick="registar()"  name="boton22" id="boton22" value="Cerrar">';
       echo '</form>';
       echo '</div>';
        }
    }else {
                 echo ("Llena todos los datos "); 
             }
         
         
 }



?>
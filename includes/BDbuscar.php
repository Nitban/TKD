<?php 
include ("db.php"); 

if (isset($_POST['btnbuscar'])){
    if (strlen($_POST['nombre-buscar'])>=1&&
    strlen($_POST['apellido-buscar'])>=1)
    {
     
     $idprofe =$_SESSION['idProfesor'];
     $nombre = strtoupper ($nombre = (trim($_POST['nombre-buscar'])));
     $apellido = strtoupper ($apellido = trim($_POST['apellido-buscar']));

     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
  
     $consulta=mysqli_query($db, "SELECT *
     FROM `alumnos` WHERE `ApellidoP` = '$apellido'
     AND `nombres` = '$nombre' AND `maestroId` = '$idprofe' ");

     while($row = mysqli_fetch_array($consulta))
     {
       echo     '<div class="alumno-box" id="registro">';
       echo     '<h2>Alumnos</h2>';
       echo     '<h2>TKD Master</h2>';

       echo     '<form class="datos-agregar" method="POST">';

       echo     '<div class="user-box">';
       echo     '<p class="titulo-dato">Id del alumno:</p>';
       echo     '<p class="dato-dato">'.$row['id'].'</p>';
       echo    '</div>';
       echo     '<div class="user-box">';
       echo    '<p class="titulo-dato">nombre del alumno:</p>';
       echo    '<p class="dato-dato">'.$row['nombres'].' '.$row['ApellidoP'].' '.$row['ApellidoM'].'</p>';
       echo    '</div>';
       echo    '<div class="user-box">';
       echo    '<p class="titulo-dato">Fecha de inscripcion:</p>';
       echo    '<p class="dato-dato">'.$row['FechaInscripcion'].'</p>';
       echo     '</div>';
       echo    '<div class="user-box">';
       echo    '<p class="titulo-dato">RFC del alumno:</p>';
       echo    '<p class="dato-dato">'.$row['rfc'].'</p>';
       echo     '</div>';
       echo    '<div class="user-box">';
       echo     '<p class="titulo-dato"> Curp del alumno:</p>';
       echo   '<p class="dato-dato">'.$row['curp'].'</p>';
       echo    '</div>';

       $IDMAESTRO =$row['maestroId'];
       $consulta2=mysqli_query($db, "SELECT *
       FROM `maestros` WHERE `id` = '$IDMAESTRO' ");
  
       while($row2 = mysqli_fetch_array($consulta2))
       {
       echo    '<div class="user-box">';
       echo     '<p class="titulo-dato">Nombre del maestro:</p>';
       echo   '<p class="dato-dato">'.$row2['nombres'].'</p>';
       echo    '</div>';
       }

       $IDCINTA=$row['cintaId'];
       $consulta3=mysqli_query($db, "SELECT *
       FROM `cintas` WHERE `id` = '$IDCINTA'");
  
       while($row3 = mysqli_fetch_array($consulta3))
       {
       echo    '<div class="user-box">';
       echo     '<p class="titulo-dato">Nombre de la cinta:</p>';
       echo   '<p class="dato-dato">'.$row3['nombre'].'</p>';
       echo    '</div>';
       }

       echo  '<input class="boton btn btn-white btn-animate" onclick="registar()"  name="boton33" id="boton33" value="Cerrar">';
       echo    '</form>';
       echo    '</div>';
        }
    }
}
?>
<?php 

if (isset($_POST['btn1'])){                     /*****************BTN1 ****************/
 echo   '<div class="tabla-alumnos"  id="todo">
<table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
<tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
    <th>Numero de alumno</th>
    <th>Nombres</th>
    <th>Fecha de Inscripcion</th>
    <th>RFC</th>
    <th>CURP</th>
    <th>Maestro</th>
    <th>Cinta</th>
</tr>';
    $idprofe =$_SESSION['idProfesor'];

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta9=mysqli_query($db, "SELECT *
     FROM `alumnos` WHERE `maestroId` = '$idprofe'  LIMIT 0, 5");

     while($row9 = mysqli_fetch_array($consulta9))
     {
        echo '<tr><td>'.$row9['id'].'</td>';
        echo '          <td>'.$row9['nombres'].' '.$row9['ApellidoP'].' '.$row9['ApellidoM'].'</td>';
        echo '          <td>'.$row9['FechaInscripcion'].'</td>';
        echo '          <td>'.$row9['rfc'].'</td>';
        echo '          <td>'.$row9['curp'].'</td>';

       $IDMAESTRO =$row9['maestroId'];
       $consulta2=mysqli_query($db, "SELECT *
       FROM `maestros` WHERE `id` = '$IDMAESTRO' ");
  
       while($row2 = mysqli_fetch_array($consulta2))
       {
       echo   '<td>'.$row2['nombres'].'</td>';
       }

       $IDCINTA=$row9['cintaId'];
       $consulta3=mysqli_query($db, "SELECT *
       FROM `cintas` WHERE `id` = '$IDCINTA'");
  
       while($row3 = mysqli_fetch_array($consulta3))
       {
        echo   '<td>'.$row3['nombre'].'</td>';
       }
        echo '          </tr>';
    }
    mysqli_close($db);
   echo '</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btn1" id="btn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="btn2" id="btn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="btn3" id="btn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="btn4" id="btn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="btn5" id="btn5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btntodoact()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>';
}
if (isset($_POST['btn2'])){                                 /*****************BTN2 ****************/
    echo   '<div class="tabla-alumnos"  id="todo">
    <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
    <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
        <th>Numero de alumno</th>
        <th>Nombres</th>
        <th>Fecha de Inscripcion</th>
        <th>RFC</th>
        <th>CURP</th>
        <th>Maestro</th>
        <th>Cinta</th>
    </tr>';
    $idprofe =$_SESSION['idProfesor'];

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta9=mysqli_query($db, "SELECT *
     FROM `alumnos` WHERE `maestroId` = '$idprofe'  LIMIT 5, 5");

     while($row9 = mysqli_fetch_array($consulta9))
     {
        echo '<tr><td>'.$row9['id'].'</td>';
        echo '          <td>'.$row9['nombres'].' '.$row9['ApellidoP'].' '.$row9['ApellidoM'].'</td>';
        echo '          <td>'.$row9['FechaInscripcion'].'</td>';
        echo '          <td>'.$row9['rfc'].'</td>';
        echo '          <td>'.$row9['curp'].'</td>';

       $IDMAESTRO =$row9['maestroId'];
       $consulta2=mysqli_query($db, "SELECT *
       FROM `maestros` WHERE `id` = '$IDMAESTRO' ");
  
       while($row2 = mysqli_fetch_array($consulta2))
       {
       echo   '<td>'.$row2['nombres'].'</td>';
       }

       $IDCINTA=$row9['cintaId'];
       $consulta3=mysqli_query($db, "SELECT *
       FROM `cintas` WHERE `id` = '$IDCINTA'");
  
       while($row3 = mysqli_fetch_array($consulta3))
       {
        echo   '<td>'.$row3['nombre'].'</td>';
       }
        echo '          </tr>';
    }
    mysqli_close($db);
    echo '</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="btn1" id="btn1" value="1">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;"  type="submit" name="btn2" id="btn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="btn3" id="btn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="btn4" id="btn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="btn5" id="btn5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btntodoact()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>';
}
if (isset($_POST['btn3'])){                                        /*****************BTN3 ****************/
    echo   '<div class="tabla-alumnos"  id="todo">
    <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
    <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
        <th>Numero de alumno</th>
        <th>Nombres</th>
        <th>Fecha de Inscripcion</th>
        <th>RFC</th>
        <th>CURP</th>
        <th>Maestro</th>
        <th>Cinta</th>
    </tr>';
    $idprofe =$_SESSION['idProfesor'];

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta9=mysqli_query($db, "SELECT *
     FROM `alumnos` WHERE `maestroId` = '$idprofe'  LIMIT 10, 5");

     while($row9 = mysqli_fetch_array($consulta9))
     {
        echo '<tr><td>'.$row9['id'].'</td>';
        echo '          <td>'.$row9['nombres'].' '.$row9['ApellidoP'].' '.$row9['ApellidoM'].'</td>';
        echo '          <td>'.$row9['FechaInscripcion'].'</td>';
        echo '          <td>'.$row9['rfc'].'</td>';
        echo '          <td>'.$row9['curp'].'</td>';

       $IDMAESTRO =$row9['maestroId'];
       $consulta2=mysqli_query($db, "SELECT *
       FROM `maestros` WHERE `id` = '$IDMAESTRO' ");
  
       while($row2 = mysqli_fetch_array($consulta2))
       {
       echo   '<td>'.$row2['nombres'].'</td>';
       }

       $IDCINTA=$row9['cintaId'];
       $consulta3=mysqli_query($db, "SELECT *
       FROM `cintas` WHERE `id` = '$IDCINTA'");
  
       while($row3 = mysqli_fetch_array($consulta3))
       {
        echo   '<td>'.$row3['nombre'].'</td>';
       }
        echo '          </tr>';
    }
    mysqli_close($db);
    echo '</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="btn1" id="btn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="btn2" id="btn2" value="2">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;"  type="submit" name="btn3" id="btn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="btn4" id="btn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="btn5" id="btn5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btntodoact()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>';
}
if (isset($_POST['btn4'])){                                               /*****************BTN4 ****************/
    echo   '<div class="tabla-alumnos"  id="todo">
    <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
    <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
        <th>Numero de alumno</th>
        <th>Nombres</th>
        <th>Fecha de Inscripcion</th>
        <th>RFC</th>
        <th>CURP</th>
        <th>Maestro</th>
        <th>Cinta</th>
    </tr>';
    $idprofe =$_SESSION['idProfesor'];

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta9=mysqli_query($db, "SELECT *
     FROM `alumnos` WHERE `maestroId` = '$idprofe'  LIMIT 15, 5");

     while($row9 = mysqli_fetch_array($consulta9))
     {
        echo '<tr><td>'.$row9['id'].'</td>';
        echo '          <td>'.$row9['nombres'].' '.$row9['ApellidoP'].' '.$row9['ApellidoM'].'</td>';
        echo '          <td>'.$row9['FechaInscripcion'].'</td>';
        echo '          <td>'.$row9['rfc'].'</td>';
        echo '          <td>'.$row9['curp'].'</td>';

       $IDMAESTRO =$row9['maestroId'];
       $consulta2=mysqli_query($db, "SELECT *
       FROM `maestros` WHERE `id` = '$IDMAESTRO' ");
  
       while($row2 = mysqli_fetch_array($consulta2))
       {
       echo   '<td>'.$row2['nombres'].'</td>';
       }

       $IDCINTA=$row9['cintaId'];
       $consulta3=mysqli_query($db, "SELECT *
       FROM `cintas` WHERE `id` = '$IDCINTA'");
  
       while($row3 = mysqli_fetch_array($consulta3))
       {
        echo   '<td>'.$row3['nombre'].'</td>';
       }
        echo '          </tr>';
    }
    mysqli_close($db);
    echo '</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="btn1" id="btn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="btn2" id="btn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="btn3" id="btn3" value="3">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;"  type="submit" name="btn4" id="btn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="btn5" id="btn5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btntodoact()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>';
}
if (isset($_POST['btn5'])){                                                     /*****************BTN5 ****************/
    echo   '<div class="tabla-alumnos"  id="todo">
    <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
    <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
        <th>Numero de alumno</th>
        <th>Nombres</th>
        <th>Fecha de Inscripcion</th>
        <th>RFC</th>
        <th>CURP</th>
        <th>Maestro</th>
        <th>Cinta</th>
    </tr>';
    $idprofe =$_SESSION['idProfesor'];

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta9=mysqli_query($db, "SELECT *
     FROM `alumnos` WHERE `maestroId` = '$idprofe' LIMIT 20, 5");

     while($row9 = mysqli_fetch_array($consulta9))
     {
        echo '<tr><td>'.$row9['id'].'</td>';
        echo '          <td>'.$row9['nombres'].' '.$row9['ApellidoP'].' '.$row9['ApellidoM'].'</td>';
        echo '          <td>'.$row9['FechaInscripcion'].'</td>';
        echo '          <td>'.$row9['rfc'].'</td>';
        echo '          <td>'.$row9['curp'].'</td>';

       $IDMAESTRO =$row9['maestroId'];
       $consulta2=mysqli_query($db, "SELECT *
       FROM `maestros` WHERE `id` = '$IDMAESTRO' ");
  
       while($row2 = mysqli_fetch_array($consulta2))
       {
       echo   '<td>'.$row2['nombres'].'</td>';
       }

       $IDCINTA=$row9['cintaId'];
       $consulta3=mysqli_query($db, "SELECT *
       FROM `cintas` WHERE `id` = '$IDCINTA'");
  
       while($row3 = mysqli_fetch_array($consulta3))
       {
        echo   '<td>'.$row3['nombre'].'</td>';
       }
        echo '          </tr>';
    }
    mysqli_close($db);
    echo '</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="btn1" id="btn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="btn2" id="btn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="btn3" id="btn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="btn4" id="btn4" value="4">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;"  type="submit" name="btn5" id="btn5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btntodoact()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>';
}
?>
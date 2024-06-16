<?php 

if (isset($_POST['btneventalum1'])){                                       /*******************BTN 1*******************/
    echo     '<div class="alumno-box"  id="alumnoseventos">';
    echo     '<h2>Alumnos en Eventos</h2>';
    echo     '<form class="datos-agregar-evento" method="POST">';

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta=mysqli_query($db, "SELECT eventoId FROM participando GROUP BY eventoId limit 0, 1");
     while($row = mysqli_fetch_array($consulta))
     {
        
       /******evento***/
      $ideventos=$row['eventoId'];
      $consulta56=mysqli_query($db, "SELECT nombre
      FROM `eventos` WHERE `id` = '$ideventos' GROUP BY id");
 
      while($row56 = mysqli_fetch_array($consulta56))
      {
      echo    '<div class="user-box">';
      echo    '<h2 class="titulo-dato">Nombre del evento: '.$row56['nombre'].'</h2>';
      echo    '</div>';
      }
    /*****************/
    /******ALUMNO***/
    echo     '<div class="todo-evento">';
     $consultal=mysqli_query($db, "SELECT alumnoId FROM `participando` WHERE eventoId = '$ideventos'");
     while($rowt = mysqli_fetch_array($consultal))
     {
      $IDALUMNO7=$rowt['alumnoId'];
      $consulta37=mysqli_query($db, "SELECT *
      FROM `alumnos` WHERE `id` = '$IDALUMNO7'");
      while($row37 = mysqli_fetch_array($consulta37))
      {
      echo    '<div class="user-box">';
      echo    '<p class="dato-dato">'.$row37['nombres'].' '.$row37['ApellidoP'].'</p>';
      echo    '</div>';
      }
    /*****************/
     }
     echo    '</div>';
    }
echo        '<div class="secciones-btn-evento">
            <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btneventalum1" id="btneventalum1" value="1">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum2" id="btneventalum2" value="2">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum3" id="btneventalum3" value="3">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum4" id="btneventalum4" value="4">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum5" id="btneventalum5" value="5">
            </div>';
      echo '<div class="boton-tabla">';
      echo  '<input class="boton btn btn-white btn-animate" onclick="btnalumnoseventos()"  name="boton33" id="boton33" value="Cerrar">';
      echo  '</div>';
      echo    '</form>';
      echo    '</div>';
    if (mysqli_connect_errno()) {
       printf("Falló la conexión: %s\n", mysqli_connect_error());
       exit();
   }

}
if (isset($_POST['btneventalum2'])){                                       /*******************BTN 2*******************/
    echo     '<div class="alumno-box"  id="alumnoseventos">';
    echo     '<h2>Alumnos en Eventos</h2>';
    echo     '<form class="datos-agregar-evento" method="POST">';

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta=mysqli_query($db, "SELECT eventoId FROM participando GROUP BY eventoId limit 1, 1");
     while($row = mysqli_fetch_array($consulta))
     {
        
       /******evento***/
      $ideventos=$row['eventoId'];
      $consulta56=mysqli_query($db, "SELECT nombre
      FROM `eventos` WHERE `id` = '$ideventos' GROUP BY id");
 
      while($row56 = mysqli_fetch_array($consulta56))
      {
      echo    '<div class="user-box">';
      echo    '<h2 class="titulo-dato">Nombre del evento: '.$row56['nombre'].'</h2>';
      echo    '</div>';
      }
    /*****************/
    /******ALUMNO***/
    echo     '<div class="todo-evento">';
     $consultal=mysqli_query($db, "SELECT alumnoId FROM `participando` WHERE eventoId = '$ideventos'");
     while($rowt = mysqli_fetch_array($consultal))
     {
      $IDALUMNO7=$rowt['alumnoId'];
      $consulta37=mysqli_query($db, "SELECT *
      FROM `alumnos` WHERE `id` = '$IDALUMNO7'");
      while($row37 = mysqli_fetch_array($consulta37))
      {
      echo    '<div class="user-box">';
      echo    '<p class="dato-dato">'.$row37['nombres'].' '.$row37['ApellidoP'].'</p>';
      echo    '</div>';
      }
    /*****************/
     }
}
    echo    '</div>';
echo        '<div class="secciones-btn-evento">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum1" id="btneventalum1" value="1">
            <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btneventalum2" id="btneventalum2" value="2">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum3" id="btneventalum3" value="3">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum4" id="btneventalum4" value="4">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum5" id="btneventalum5" value="5">
            </div>';
      echo '<div class="boton-tabla">';
      echo  '<input class="boton btn btn-white btn-animate" onclick="btnalumnoseventos()"  name="boton33" id="boton33" value="Cerrar">';
      echo  '</div>';
      echo    '</form>';
      echo    '</div>';
    if (mysqli_connect_errno()) {
       printf("Falló la conexión: %s\n", mysqli_connect_error());
       exit();
   }

}
if (isset($_POST['btneventalum3'])){                                       /*******************BTN 3*******************/
    echo     '<div class="alumno-box"  id="alumnoseventos">';
    echo     '<h2>Alumnos en Eventos</h2>';
    echo     '<form class="datos-agregar-evento" method="POST">';

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta=mysqli_query($db, "SELECT eventoId FROM participando GROUP BY eventoId limit 2, 1");
     while($row = mysqli_fetch_array($consulta))
     {
        
       /******evento***/
      $ideventos=$row['eventoId'];
      $consulta56=mysqli_query($db, "SELECT nombre
      FROM `eventos` WHERE `id` = '$ideventos' GROUP BY id");
 
      while($row56 = mysqli_fetch_array($consulta56))
      {
      echo    '<div class="user-box">';
      echo    '<h2 class="titulo-dato">Nombre del evento: '.$row56['nombre'].'</h2>';
      echo    '</div>';
      }
    /*****************/
    /******ALUMNO***/
    echo     '<div class="todo-evento">';
     $consultal=mysqli_query($db, "SELECT alumnoId FROM `participando` WHERE eventoId = '$ideventos'");
     while($rowt = mysqli_fetch_array($consultal))
     {
      $IDALUMNO7=$rowt['alumnoId'];
      $consulta37=mysqli_query($db, "SELECT *
      FROM `alumnos` WHERE `id` = '$IDALUMNO7'");
      while($row37 = mysqli_fetch_array($consulta37))
      {
      echo    '<div class="user-box">';
      echo    '<p class="dato-dato">'.$row37['nombres'].' '.$row37['ApellidoP'].'</p>';
      echo    '</div>';
      }
    /*****************/
     }
     echo    '</div>';
    }
echo        '<div class="secciones-btn-evento">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum1" id="btneventalum1" value="1">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum2" id="btneventalum2" value="2">
            <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btneventalum3" id="btneventalum3" value="3">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum4" id="btneventalum4" value="4">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum5" id="btneventalum5" value="5">
            </div>';
      echo '<div class="boton-tabla">';
      echo  '<input class="boton btn btn-white btn-animate" onclick="btnalumnoseventos()"  name="boton33" id="boton33" value="Cerrar">';
      echo  '</div>';
      echo    '</form>';
      echo    '</div>';
    if (mysqli_connect_errno()) {
       printf("Falló la conexión: %s\n", mysqli_connect_error());
       exit();
   }

}
if (isset($_POST['btneventalum4'])){                                       /*******************BTN 4*******************/
    echo     '<div class="alumno-box"   id="alumnoseventos">';
    echo     '<h2>Alumnos en Eventos</h2>';
    echo     '<form class="datos-agregar-evento" method="POST">';

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta=mysqli_query($db, "SELECT eventoId FROM participando GROUP BY eventoId limit 3, 1");
     while($row = mysqli_fetch_array($consulta))
     {
        
       /******evento***/
      $ideventos=$row['eventoId'];
      $consulta56=mysqli_query($db, "SELECT nombre
      FROM `eventos` WHERE `id` = '$ideventos' GROUP BY id");
 
      while($row56 = mysqli_fetch_array($consulta56))
      {
      echo    '<div class="user-box">';
      echo    '<h2 class="titulo-dato">Nombre del evento: '.$row56['nombre'].'</h2>';
      echo    '</div>';
      }
    /*****************/
    /******ALUMNO***/
    echo     '<div class="todo-evento">';
     $consultal=mysqli_query($db, "SELECT alumnoId FROM `participando` WHERE eventoId = '$ideventos'");
     while($rowt = mysqli_fetch_array($consultal))
     {
      $IDALUMNO7=$rowt['alumnoId'];
      $consulta37=mysqli_query($db, "SELECT *
      FROM `alumnos` WHERE `id` = '$IDALUMNO7'");
      while($row37 = mysqli_fetch_array($consulta37))
      {
      echo    '<div class="user-box">';
      echo    '<p class="dato-dato">'.$row37['nombres'].' '.$row37['ApellidoP'].'</p>';
      echo    '</div>';
      }
    /*****************/
     }
     echo    '</div>';
    }
echo        '<div class="secciones-btn-evento">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum1" id="btneventalum1" value="1">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum2" id="btneventalum2" value="2">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum3" id="btneventalum3" value="3">
            <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btneventalum4" id="btneventalum4" value="4">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum5" id="btneventalum5" value="5">
            </div>';
      echo '<div class="boton-tabla">';
      echo  '<input class="boton btn btn-white btn-animate" onclick="btnalumnoseventos()"  name="boton33" id="boton33" value="Cerrar">';
      echo  '</div>';
      echo    '</form>';
      echo    '</div>';
    if (mysqli_connect_errno()) {
       printf("Falló la conexión: %s\n", mysqli_connect_error());
       exit();
   }

}
if (isset($_POST['btneventalum5'])){                                       /*******************BTN 5*******************/
    echo     '<div class="alumno-box"   id="alumnoseventos">';
    echo     '<h2>Alumnos en Eventos</h2>';
    echo     '<form class="datos-agregar-evento" method="POST">';

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta=mysqli_query($db, "SELECT eventoId FROM participando GROUP BY eventoId limit 4, 1");
     while($row = mysqli_fetch_array($consulta))
     {
        
       /******evento***/
      $ideventos=$row['eventoId'];
      $consulta56=mysqli_query($db, "SELECT nombre
      FROM `eventos` WHERE `id` = '$ideventos' GROUP BY id");
 
      while($row56 = mysqli_fetch_array($consulta56))
      {
      echo    '<div class="user-box">';
      echo    '<h2 class="titulo-dato">Nombre del evento: '.$row56['nombre'].'</h2>';
      echo    '</div>';
      }
    /*****************/
    /******ALUMNO***/
    echo     '<div class="todo-evento">';
     $consultal=mysqli_query($db, "SELECT alumnoId FROM `participando` WHERE eventoId = '$ideventos'");
     while($rowt = mysqli_fetch_array($consultal))
     {
      $IDALUMNO7=$rowt['alumnoId'];
      $consulta37=mysqli_query($db, "SELECT *
      FROM `alumnos` WHERE `id` = '$IDALUMNO7'");
      while($row37 = mysqli_fetch_array($consulta37))
      {
      echo    '<div class="user-box">';
      echo    '<p class="dato-dato">'.$row37['nombres'].' '.$row37['ApellidoP'].'</p>';
      echo    '</div>';
      }
    /*****************/
     }
     echo    '</div>';
    }
echo        '<div class="secciones-btn-evento">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum1" id="btneventalum1" value="1">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum2" id="btneventalum2" value="2">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum3" id="btneventalum3" value="3">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum4" id="btneventalum4" value="4">
            <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btneventalum5" id="btneventalum5" value="5">
            </div>';
      echo '<div class="boton-tabla">';
      echo  '<input class="boton btn btn-white btn-animate" onclick="btnalumnoseventos()"  name="boton33" id="boton33" value="Cerrar">';
      echo  '</div>';
      echo    '</form>';
      echo    '</div>';
    if (mysqli_connect_errno()) {
       printf("Falló la conexión: %s\n", mysqli_connect_error());
       exit();
   }

}

?>
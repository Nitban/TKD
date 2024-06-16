<?php 
if (isset($_POST['mensualidadbtn1'])){                    /*****************BTN 1****************** */
  
echo'  </script>
  <div class="tabla-alumnos" id="mentodo">
  <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0" >
  <tr borde="1" aling="center" bordercolor="blue" cellspacing="0">
      <th>Alumno</th>
      <th>Importe</th>
      <th>Fecha de pago</th>
      <th>Eliminar</th>
      <th>Imprimir</th>
  </tr>';
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
      $idprofe =$_SESSION['idProfesor'];
      $consulta=mysqli_query($db, "SELECT * FROM mensualidad ORDER BY fechaPago ASC LIMIT 0, 5");
      
       while($row0 = mysqli_fetch_array($consulta))
       {
          $IDALUMNOMEN =$row0['alumnoId'];
         $consulta7=mysqli_query($db, "SELECT *
         FROM `alumnos` WHERE `id` = '$IDALUMNOMEN'");
    
         while($row7 = mysqli_fetch_array($consulta7))
         {
         echo   '<td>'.$row7['nombres'].' '.$row7['ApellidoP'].'</td>';
         }
          echo '          <td>'.$row0['importe'].'</td>';
          echo '          <td>'.$row0['fechaPago'].'</td>';
          echo '          <td>
          <a  href="herramientas.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="4" y1="7" x2="20" y2="7" />
          <line x1="10" y1="11" x2="10" y2="17" />
          <line x1="14" y1="11" x2="14" y2="17" />
          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
          </svg>
          </a>
          </td>';
          echo '          <td>
          <a  href="app/reportes/mensualidades.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
          <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
          <rect x="7" y="13" width="10" height="8" rx="2" />
          </svg>
          </a>
          </td>';
          echo '          </tr>';
        }
        ECHO '</table>';
        echo '<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;"  type="submit" name="mensualidadbtn1" id="mensualidadbtn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn2" id="mensualidadbtn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn3" id="mensualidadbtn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn4" id="mensualidadbtn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn5" id="mensualidadbtn5" value="5">
</div>
</form>';
        echo  '<div class="boton-tabla">';
        echo  '<input class="boton btn btn-white btn-animate" onclick="btnmentodo()"  name="boton31" id="boton31" value="Cerrar">';
        echo '</div>';
        echo    '</div>';
      if (mysqli_connect_errno()) {
         printf("Falló la conexión: %s\n", mysqli_connect_error());
         exit();
     }
  
     if(isset($_GET['idmen'])){
      $idmensualidd=$_GET['idmen'];
      $idmens=$idmensualidd;
  
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
    
  
      $consultad=mysqli_query($db, "DELETE FROM  `mensualidad` where `id`='$idmens'");
      $resultadod = mysqli_query($db,$consultad);
      if ($resultadod){
         echo ("Se ha eliminado");
      }else{
          echo ("error");
      }
  
  
     }
     mysqli_close($db);
}
if (isset($_POST['mensualidadbtn2'])){                    /*****************BTN 2****************** */
  
echo'  </script>
  <div class="tabla-alumnos"  id="mentodo">
  <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0" >
  <tr borde="1" aling="center" bordercolor="blue" cellspacing="0">
      <th>Alumno</th>
      <th>Importe</th>
      <th>Fecha de pago</th>
      <th>Eliminar</th>
      <th>Imprimir</th>
  </tr>';
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
      $idprofe =$_SESSION['idProfesor'];
      $consulta=mysqli_query($db, "SELECT * FROM mensualidad ORDER BY fechaPago ASC Limit 5, 5");
      
       while($row0 = mysqli_fetch_array($consulta))
       {
          $IDALUMNOMEN =$row0['alumnoId'];
         $consulta7=mysqli_query($db, "SELECT *
         FROM `alumnos` WHERE `id` = '$IDALUMNOMEN'");
    
         while($row7 = mysqli_fetch_array($consulta7))
         {
         echo   '<td>'.$row7['nombres'].' '.$row7['ApellidoP'].'</td>';
         }
          echo '          <td>'.$row0['importe'].'</td>';
          echo '          <td>'.$row0['fechaPago'].'</td>';
          echo '          <td>
          <a  href="herramientas.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="4" y1="7" x2="20" y2="7" />
          <line x1="10" y1="11" x2="10" y2="17" />
          <line x1="14" y1="11" x2="14" y2="17" />
          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
          </svg>
          </a>
          </td>';
          echo '          <td>
          <a  href="app/reportes/mensualidades.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
          <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
          <rect x="7" y="13" width="10" height="8" rx="2" />
          </svg>
          </a>
          </td>';
          echo '          </tr>';
        }
        ECHO '</table>';
        echo '<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn1" id="mensualidadbtn1" value="1">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="mensualidadbtn2" id="mensualidadbtn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn3" id="mensualidadbtn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn4" id="mensualidadbtn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn5" id="mensualidadbtn5" value="5">
</div>
</form>';
        echo  '<div class="boton-tabla">';
        echo  '<input class="boton btn btn-white btn-animate" onclick="btnmentodo()"  name="boton31" id="boton31" value="Cerrar">';
        echo '</div>';
        echo    '</div>';
      if (mysqli_connect_errno()) {
         printf("Falló la conexión: %s\n", mysqli_connect_error());
         exit();
     }
  
     if(isset($_GET['idmen'])){
      $idmensualidd=$_GET['idmen'];
      $idmens=$idmensualidd;
  
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
    
  
      $consultad=mysqli_query($db, "DELETE FROM  `mensualidad` where `id`='$idmens'");
      $resultadod = mysqli_query($db,$consultad);
      if ($resultadod){
         echo ("Se ha eliminado");
      }else{
          echo ("error");
      }
  
  
     }
     mysqli_close($db);
}
if (isset($_POST['mensualidadbtn3'])){                    /*****************BTN 3****************** */
  
echo'  </script>
  <div class="tabla-alumnos"  id="mentodo">
  <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0" >
  <tr borde="1" aling="center" bordercolor="blue" cellspacing="0">
      <th>Alumno</th>
      <th>Importe</th>
      <th>Fecha de pago</th>
      <th>Eliminar</th>
      <th>Imprimir</th>
  </tr>';
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
      $idprofe =$_SESSION['idProfesor'];
      $consulta=mysqli_query($db, "SELECT * FROM mensualidad ORDER BY fechaPago ASC Limit 10, 5");
      
       while($row0 = mysqli_fetch_array($consulta))
       {
          $IDALUMNOMEN =$row0['alumnoId'];
         $consulta7=mysqli_query($db, "SELECT *
         FROM `alumnos` WHERE `id` = '$IDALUMNOMEN'");
    
         while($row7 = mysqli_fetch_array($consulta7))
         {
         echo   '<td>'.$row7['nombres'].' '.$row7['ApellidoP'].'</td>';
         }
          echo '          <td>'.$row0['importe'].'</td>';
          echo '          <td>'.$row0['fechaPago'].'</td>';
          echo '          <td>
          <a  href="herramientas.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="4" y1="7" x2="20" y2="7" />
          <line x1="10" y1="11" x2="10" y2="17" />
          <line x1="14" y1="11" x2="14" y2="17" />
          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
          </svg>
          </a>
          </td>';
          echo '          <td>
          <a  href="app/reportes/mensualidades.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
          <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
          <rect x="7" y="13" width="10" height="8" rx="2" />
          </svg>
          </a>
          </td>';
          echo '          </tr>';
        }
        ECHO '</table>';
        echo '<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn1" id="mensualidadbtn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn2" id="mensualidadbtn2" value="2">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="mensualidadbtn3" id="mensualidadbtn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn4" id="mensualidadbtn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn5" id="mensualidadbtn5" value="5">
</div>
</form>';
        echo  '<div class="boton-tabla">';
        echo  '<input class="boton btn btn-white btn-animate" onclick="btnmentodo()"  name="boton31" id="boton31" value="Cerrar">';
        echo '</div>';
        echo    '</div>';
      if (mysqli_connect_errno()) {
         printf("Falló la conexión: %s\n", mysqli_connect_error());
         exit();
     }
  
     if(isset($_GET['idmen'])){
      $idmensualidd=$_GET['idmen'];
      $idmens=$idmensualidd;
  
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
    
  
      $consultad=mysqli_query($db, "DELETE FROM  `mensualidad`  where `id`='$idmens'");
      $resultadod = mysqli_query($db,$consultad);
      if ($resultadod){
         echo ("Se ha eliminado");
      }else{
          echo ("error");
      }
  
  
     }
     mysqli_close($db);
}
if (isset($_POST['mensualidadbtn4'])){                    /*****************BTN 4****************** */
  
echo'  </script>
  <div class="tabla-alumnos"  id="mentodo">
  <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0" >
  <tr borde="1" aling="center" bordercolor="blue" cellspacing="0">
      <th>Alumno</th>
      <th>Importe</th>
      <th>Fecha de pago</th>
      <th>Eliminar</th>
      <th>Imprimir</th>
  </tr>';
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
      $idprofe =$_SESSION['idProfesor'];
      $consulta=mysqli_query($db, "SELECT * FROM mensualidad ORDER BY fechaPago ASC Limit 15, 5");
      
       while($row0 = mysqli_fetch_array($consulta))
       {
          $IDALUMNOMEN =$row0['alumnoId'];
         $consulta7=mysqli_query($db, "SELECT *
         FROM `alumnos` WHERE `id` = '$IDALUMNOMEN'");
    
         while($row7 = mysqli_fetch_array($consulta7))
         {
         echo   '<td>'.$row7['nombres'].' '.$row7['ApellidoP'].'</td>';
         }
          echo '          <td>'.$row0['importe'].'</td>';
          echo '          <td>'.$row0['fechaPago'].'</td>';
          echo '          <td>
          <a  href="herramientas.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="4" y1="7" x2="20" y2="7" />
          <line x1="10" y1="11" x2="10" y2="17" />
          <line x1="14" y1="11" x2="14" y2="17" />
          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
          </svg>
          </a>
          </td>';
          echo '          <td>
          <a  href="app/reportes/mensualidades.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
          <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
          <rect x="7" y="13" width="10" height="8" rx="2" />
          </svg>
          </a>
          </td>';
          echo '          </tr>';
        }
        ECHO '</table>';
        echo '<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn1" id="mensualidadbtn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn2" id="mensualidadbtn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn3" id="mensualidadbtn3" value="3">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="mensualidadbtn4" id="mensualidadbtn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn5" id="mensualidadbtn5" value="5">
</div>
</form>';
        echo  '<div class="boton-tabla">';
        echo  '<input class="boton btn btn-white btn-animate" onclick="btnmentodo()"  name="boton31" id="boton31" value="Cerrar">';
        echo '</div>';
        echo    '</div>';
      if (mysqli_connect_errno()) {
         printf("Falló la conexión: %s\n", mysqli_connect_error());
         exit();
     }
  
     if(isset($_GET['idmen'])){
      $idmensualidd=$_GET['idmen'];
      $idmens=$idmensualidd;
  
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
    
  
      $consultad=mysqli_query($db, "DELETE FROM  `mensualidad` where `id`='$idmens'");
      $resultadod = mysqli_query($db,$consultad);
      if ($resultadod){
         echo ("Se ha eliminado");
      }else{
          echo ("error");
      }
  
  
     }
     mysqli_close($db);
}
if (isset($_POST['mensualidadbtn5'])){                    /*****************BTN 5****************** */
  
echo'  </script>
  <div class="tabla-alumnos"  id="mentodo">
  <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0" >
  <tr borde="1" aling="center" bordercolor="blue" cellspacing="0">
      <th>Alumno</th>
      <th>Importe</th>
      <th>Fecha de pago</th>
      <th>Eliminar</th>
      <th>Imprimir</th>
  </tr>';
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
      $idprofe =$_SESSION['idProfesor'];
      $consulta=mysqli_query($db, "SELECT * FROM mensualidad ORDER BY fechaPago ASC Limit 20, 5");
      
       while($row0 = mysqli_fetch_array($consulta))
       {
          $IDALUMNOMEN =$row0['alumnoId'];
         $consulta7=mysqli_query($db, "SELECT *
         FROM `alumnos` WHERE `id` = '$IDALUMNOMEN' ");
    
         while($row7 = mysqli_fetch_array($consulta7))
         {
         echo   '<td>'.$row7['nombres'].' '.$row7['ApellidoP'].'</td>';
         }
          echo '          <td>'.$row0['importe'].'</td>';
          echo '          <td>'.$row0['fechaPago'].'</td>';
          echo '          <td>
          <a  href="herramientas.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="4" y1="7" x2="20" y2="7" />
          <line x1="10" y1="11" x2="10" y2="17" />
          <line x1="14" y1="11" x2="14" y2="17" />
          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
          </svg>
          </a>
          </td>';
          echo '          <td>
          <a  href="app/reportes/mensualidades.php?idmen='.$row0['id'].'">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
          <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
          <rect x="7" y="13" width="10" height="8" rx="2" />
          </svg>
          </a>
          </td>';
          echo '          </tr>';
        }
        ECHO '</table>';
        echo '<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn1" id="mensualidadbtn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn2" id="mensualidadbtn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn3" id="mensualidadbtn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="mensualidadbtn4" id="mensualidadbtn4" value="4">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="mensualidadbtn5" id="mensualidadbtn5" value="5">
</div>
</form>';
        echo  '<div class="boton-tabla">';
        echo  '<input class="boton btn btn-white btn-animate" onclick="btnmentodo()"  name="boton31" id="boton31" value="Cerrar">';
        echo '</div>';
        echo    '</div>';
      if (mysqli_connect_errno()) {
         printf("Falló la conexión: %s\n", mysqli_connect_error());
         exit();
     }
  
     if(isset($_GET['idmen'])){
      $idmensualidd=$_GET['idmen'];
      $idmens=$idmensualidd;
  
      $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
      if(!$db){
          echo "Error en la conexión";
      }
    
  
      $consultad=mysqli_query($db, "DELETE FROM  `mensualidad` where `id`='$idmens'");
      $resultadod = mysqli_query($db,$consultad);
      if ($resultadod){
         echo ("Se ha eliminado");
      }else{
          echo ("error");
      }
  
  
     }
     mysqli_close($db);
}
?>
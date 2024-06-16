<?php 

if (isset($_POST['btnevento1'])){                           ///********************BTN1******************** */
   echo '<div class="tabla-alumnos"  id="todoevento">
<table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
<tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
    <th>Numero del evento</th>
    <th>Ubicacion</th>
    <th>Organizador</th>
    <th>Precio Unitario</th>
    <th>Tipo de Evento</th>
    <th>Eliminar</th>
</tr>';

    $idprofe =$_SESSION['idProfesor'];

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta9=mysqli_query($db, "SELECT *
     FROM `eventos` LIMIT 0, 5");

     while($row9 = mysqli_fetch_array($consulta9))
     {
        echo '<tr>';
        echo '          <td>'.$row9['nombre'].'</td>';
        echo '          <td>'.$row9['ubicacion'].'</td>';
        echo '          <td>'.$row9['organizador'].'</td>';
        echo '          <td>'.$row9['precioUnitario'].'</td>';
        echo '          <td>'.$row9['tipoEvento'].'</td>';
        echo '          <td>
        <a  href="herramientas.php?idevent='.$row9['id'].'">
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
        echo '          </tr>';
    }
    mysqli_close($db);

    if(isset($_GET['idevent'])){
        $idevento=$_GET['idevent'];
        $eventid=$idevento;
    
        $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
        if(!$db){
            echo "Error en la conexión";
        }
      
    
        $consultad=mysqli_query($db, "DELETE FROM  `eventos` where `id`='$eventid'");
        $resultadod = mysqli_query($db,$consultad);
        if ($resultadod){
           echo ("Se ha eliminado");
        }else{
            echo ("error");
        }
    
    
       }
echo '</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btnevento1" id="btnevento1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento2" id="btnevento2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento3" id="btnevento3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento4" id="btnevento4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento5" id="btnevento5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btnmostrarevent()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>';
}

if (isset($_POST['btnevento2'])){                           ///********************BTN2******************** */
    echo '<div class="tabla-alumnos"  id="todoevento">
 <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
 <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
     <th>Numero del evento</th>
     <th>Ubicacion</th>
     <th>Organizador</th>
     <th>Precio Unitario</th>
     <th>Tipo de Evento</th>
     <th>Eliminar</th>
 </tr>';
 
     $idprofe =$_SESSION['idProfesor'];
 
     $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
     if(!$db){
         echo "Error en la conexión";
     }
     $consulta9=mysqli_query($db, "SELECT *
      FROM `eventos` LIMIT 5, 5");
 
      while($row9 = mysqli_fetch_array($consulta9))
      {
         echo '<tr>';
         echo '          <td>'.$row9['nombre'].'</td>';
         echo '          <td>'.$row9['ubicacion'].'</td>';
         echo '          <td>'.$row9['organizador'].'</td>';
         echo '          <td>'.$row9['precioUnitario'].'</td>';
         echo '          <td>'.$row9['tipoEvento'].'</td>';
         echo '          <td>
         <a  href="herramientas.php?idevent='.$row9['id'].'">
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
         echo '          </tr>';
     }
     mysqli_close($db);
 
     if(isset($_GET['idevent'])){
         $idevento=$_GET['idevent'];
         $eventid=$idevento;
     
         $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
         if(!$db){
             echo "Error en la conexión";
         }
       
     
         $consultad=mysqli_query($db, "DELETE FROM  `eventos` where `id`='$eventid'");
         $resultadod = mysqli_query($db,$consultad);
         if ($resultadod){
            echo ("Se ha eliminado");
         }else{
             echo ("error");
         }
     
     
        }
 echo '</table>
 
 <form method="POST">
 <div class="secciones-btn">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento1" id="btnevento1" value="1">
 <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btnevento2" id="btnevento2" value="2">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento3" id="btnevento3" value="3">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento4" id="btnevento4" value="4">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento5" id="btnevento5" value="5">
 </div>
 </form>
 
 <div class="boton-tabla">
 <input class="boton btn btn-white btn-animate" onclick="btnmostrarevent()" name="boton01" id="boton01" value="Cerrar">
 </div>
 
 </div>';
 }

 if (isset($_POST['btnevento3'])){                           ///********************BTN3******************** */
    echo '<div class="tabla-alumnos"  id="todoevento">
 <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
 <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
     <th>Numero del evento</th>
     <th>Ubicacion</th>
     <th>Organizador</th>
     <th>Precio Unitario</th>
     <th>Tipo de Evento</th>
     <th>Eliminar</th>
 </tr>';
 
     $idprofe =$_SESSION['idProfesor'];
 
     $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
     if(!$db){
         echo "Error en la conexión";
     }
     $consulta9=mysqli_query($db, "SELECT *
      FROM `eventos` LIMIT 10, 5");
 
      while($row9 = mysqli_fetch_array($consulta9))
      {
         echo '<tr>';
         echo '          <td>'.$row9['nombre'].'</td>';
         echo '          <td>'.$row9['ubicacion'].'</td>';
         echo '          <td>'.$row9['organizador'].'</td>';
         echo '          <td>'.$row9['precioUnitario'].'</td>';
         echo '          <td>'.$row9['tipoEvento'].'</td>';
         echo '          <td>
         <a  href="herramientas.php?idevent='.$row9['id'].'">
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
         echo '          </tr>';
     }
     mysqli_close($db);
 
     if(isset($_GET['idevent'])){
         $idevento=$_GET['idevent'];
         $eventid=$idevento;
     
         $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
         if(!$db){
             echo "Error en la conexión";
         }
       
     
         $consultad=mysqli_query($db, "DELETE FROM  `eventos` where `id`='$eventid'");
         $resultadod = mysqli_query($db,$consultad);
         if ($resultadod){
            echo ("Se ha eliminado");
         }else{
             echo ("error");
         }
     
     
        }
 echo '</table>
 <form method="POST">
 <div class="secciones-btn">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento1" id="btnevento1" value="1">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento2" id="btnevento2" value="2">
 <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btnevento3" id="btnevento3" value="3">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento4" id="btnevento4" value="4">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento5" id="btnevento5" value="5">
 </div>
 </form>
 
 <div class="boton-tabla">
 <input class="boton btn btn-white btn-animate" onclick="btnmostrarevent()" name="boton01" id="boton01" value="Cerrar">
 </div>
 
 </div>';
 }

 if (isset($_POST['btnevento4'])){                           ///********************BTN4******************** */
    echo '<div class="tabla-alumnos" id="todoevento">
 <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
 <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
     <th>Numero del evento</th>
     <th>Ubicacion</th>
     <th>Organizador</th>
     <th>Precio Unitario</th>
     <th>Tipo de Evento</th>
     <th>Eliminar</th>
 </tr>';
 
     $idprofe =$_SESSION['idProfesor'];
 
     $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
     if(!$db){
         echo "Error en la conexión";
     }
     $consulta9=mysqli_query($db, "SELECT *
      FROM `eventos` LIMIT 15, 5");
 
      while($row9 = mysqli_fetch_array($consulta9))
      {
         echo '<tr>';
         echo '          <td>'.$row9['nombre'].'</td>';
         echo '          <td>'.$row9['ubicacion'].'</td>';
         echo '          <td>'.$row9['organizador'].'</td>';
         echo '          <td>'.$row9['precioUnitario'].'</td>';
         echo '          <td>'.$row9['tipoEvento'].'</td>';
         echo '          <td>
         <a  href="herramientas.php?idevent='.$row9['id'].'">
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
         echo '          </tr>';
     }
     mysqli_close($db);
 
     if(isset($_GET['idevent'])){
         $idevento=$_GET['idevent'];
         $eventid=$idevento;
     
         $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
         if(!$db){
             echo "Error en la conexión";
         }
       
     
         $consultad=mysqli_query($db, "DELETE FROM  `eventos` where `id`='$eventid'");
         $resultadod = mysqli_query($db,$consultad);
         if ($resultadod){
            echo ("Se ha eliminado");
         }else{
             echo ("error");
         }
     
     
        }
 echo '</table>
 
 <form method="POST">
 <div class="secciones-btn">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento1" id="btnevento1" value="1">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento2" id="btnevento2" value="2">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento3" id="btnevento3" value="3">
 <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btnevento4" id="btnevento4" value="4">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento5" id="btnevento5" value="5">
 </div>
 </form>
 
 <div class="boton-tabla">
 <input class="boton btn btn-white btn-animate" onclick="btnmostrarevent()" name="boton01" id="boton01" value="Cerrar">
 </div>
 
 </div>';
 }

 if (isset($_POST['btnevento5'])){                           ///********************BTN5******************** */
    echo '<div class="tabla-alumnos"  id="todoevento">
 <table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
 <tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
     <th>Numero del evento</th>
     <th>Ubicacion</th>
     <th>Organizador</th>
     <th>Precio Unitario</th>
     <th>Tipo de Evento</th>
     <th>Eliminar</th>
 </tr>';
 
     $idprofe =$_SESSION['idProfesor'];
 
     $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
     if(!$db){
         echo "Error en la conexión";
     }
     $consulta9=mysqli_query($db, "SELECT *
      FROM `eventos` LIMIT 20, 5");
 
      while($row9 = mysqli_fetch_array($consulta9))
      {
         echo '<tr>';
         echo '          <td>'.$row9['nombre'].'</td>';
         echo '          <td>'.$row9['ubicacion'].'</td>';
         echo '          <td>'.$row9['organizador'].'</td>';
         echo '          <td>'.$row9['precioUnitario'].'</td>';
         echo '          <td>'.$row9['tipoEvento'].'</td>';
         echo '          <td>
         <a  href="herramientas.php?idevent='.$row9['id'].'">
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
         echo '          </tr>';
     }
     mysqli_close($db);
 
     if(isset($_GET['idevent'])){
         $idevento=$_GET['idevent'];
         $eventid=$idevento;
     
         $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
         if(!$db){
             echo "Error en la conexión";
         }
       
     
         $consultad=mysqli_query($db, "DELETE FROM  `eventos` where `id`='$eventid'");
         $resultadod = mysqli_query($db,$consultad);
         if ($resultadod){
            echo ("Se ha eliminado");
         }else{
             echo ("error");
         }
     
     
        }
 echo '</table>
 
 <form method="POST">
 <div class="secciones-btn">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento1" id="btnevento1" value="1">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento2" id="btnevento2" value="2">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento3" id="btnevento3" value="3">
 <input class="boton btn btn-white btn-animate" type="submit" name="btnevento4" id="btnevento4" value="4">
 <input class="boton btn btn-white btn-animate" style="background-color: #ffffff;text-color: black;color: black;" type="submit" name="btnevento5" id="btnevento5" value="5">
 </div>
 </form>
 
 <div class="boton-tabla">
 <input class="boton btn btn-white btn-animate" onclick="btnmostrarevent()" name="boton01" id="boton01" value="Cerrar">
 </div>
 
 </div>';
 }

?>
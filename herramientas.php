<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if (!isset($_SESSION['idProfesor'])){
    include ("includes/validar.php");
}
include ("includes/registrar.php");
include ("includes/BDalumno.php");
include ("includes/BDbuscar.php");
include ("includes/BDeliminar.php");
include ("includes/BDeditar.php");
include ("includes/BDmensualidad.php");
include ("includes/BDtorneos.php");
include ("includes/BDexamen.php");
include ("includes/BDmostrartodo.php");
include ("includes/BDmensualidadAtrasada.php");
include ("includes/BDeventos.php");
include ("includes/BDtodoevento.php");
include ("includes/BDalumnoseventos.php");
include ("includes/BDalumnoseventostodos.php");
   ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKD MASTER</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css" as="style">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <div>
            <div class="contenido-header">
            <nav class="redes-sociales">
          <a href="https://www.facebook.com/TKD-Master-105464338416258"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook "
              width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg></a>
          <a href="https://twitter.com/TKDMaster13"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter "
              width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
            </svg></a>
          <a href="https://www.pinterest.com.mx/taekowdomaster/_saved/"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-pinterest "
              width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="8" y1="20" x2="12" y2="11" />
              <path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" />
              <circle cx="12" cy="12" r="9" />
            </svg></a>
          <a href="https://www.youtube.com/channel/UCcEj_JSLspvCNlDa50pXvzQ"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube "
              width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="3" y="5" width="18" height="14" rx="4" />
              <path d="M10 9l5 3l-5 3z" />
            </svg></a>
          <a href="https://www.instagram.com/tkdmaster8/"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram "
              width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="4" y="4" width="16" height="16" rx="4" />
              <circle cx="12" cy="12" r="3" />
              <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
            </svg></a>
        </nav>
                <?php
          if (!isset($_SESSION['idProfesor'])){


          echo '

        <div class="registro-cuenta">
          <p onclick="inicio()"> Iniciar </p>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="56" height="56" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="12" r="1" />
            <circle cx="12" cy="19" r="1" />
            <circle cx="12" cy="5" r="1" />
            </svg>
          <p onclick="registar()" style="text-align: left;"> Registrar </p>

          <img class="logo" src="imgTienda/iconoTKDBlanco.png" alt="Logotipo">
        </div>';}
        else{
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
            echo '
            <div class="registro-cuenta">
            <p><a href="perfil.php" > '.$row['nombres'].' </a></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="56" height="56" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="12" r="1" />
            <circle cx="12" cy="19" r="1" />
            <circle cx="12" cy="5" r="1" />
            </svg>
            <a href="cerrarSesion.php">Cerrar Sesion</a>
  
            <img class="logo" src="imgTienda/iconoTKDBlanco.png" alt="Logotipo">
            </div>';
        }
            
          
        }
        ?>
            </div>
        </div>
        <h1 class="titulo">Taekwondo Master <span>TKD MASTER</span> </h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
        <?php
          if (!isset($_SESSION['idProfesor'])){
    echo '<a href="index.php">Inicio</a>
          <a href="inscripciones.php">Inscripciones</a>
          <a href="torneos.php">Torneos</a>';
          }else{
    echo '<a href="index.php">Inicio</a>
          <a href="inscripciones.php">Inscripciones</a>
          <a href="torneos.php">Torneos</a>
          <a href="herramientas.php">Herramientas</a>';
          }
    ?>
        </nav>
    </div>

    <main class="contenedor-info sombra">
        <h1 class="titulo-herramientas">Herramientas</h1>


        <section class="contenedor comprar">
            <h2 class="comprar__titulo">Alumnos</h2>

            <div class="bloques">
            <!--------------------------.ALUMNOOOOOS------------------------------------------------>
                <div class="bloque">
                    <p onclick="registaralumno()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                            width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 11h6m-3 -3v6" />
                        </svg>
                    </p>
                    <h3 class="bloque__titulo">Registrar</h3>
                    <p>Registra un nuevo alumno</p>
                </div>
                <!--.bloque-->

                <div class="bloque">
                    <p onclick="btnbuscaract()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="100"
                            height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </p>
                    <h3 class="bloque__titulo">Buscar</h3>
                    <p>Buscar un alumno mediante unos datos</p>
                </div>
                <!--.bloque-->

                <div class="bloque">
                    <p onclick="btneliminaract()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="100"
                            height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </p>
                    <h3 class="bloque__titulo">Eliminar</h3>
                    <p>Busca un alumno para despues poder eliminarlo</p>
                </div>
                <!--.bloque-->

                <div class="bloque">
                    <p onclick="btneditaract()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="100"
                            height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                            <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                        </svg>
                    </p>
                    <h3 class="bloque__titulo">Editar</h3>
                    <p>selecciona un alumno para despues poder editarlo</p>
                </div>
                <!--.bloques-->
                <div class="bloque">
                    <p onclick="btntodoact()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                        <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                        <line x1="3" y1="6" x2="3" y2="19" />
                        <line x1="12" y1="6" x2="12" y2="19" />
                        <line x1="21" y1="6" x2="21" y2="19" />
                        </svg>
                    </p>
                    <h3 class="bloque__titulo">Mostrar Todo</h3>
                    <p>Mostrar todos los alumnos</p>
                </div>
                <!--.bloque-->
            </div>
            <!--------------------------.Mensualidad------------------------------------------------>
            <h2 class="comprar__titulo">Mensualidad</h2>
            <div class="bloques">
                <!--.bloque-->
                <div class="bloque">
                    <p onclick="btnmensualidadact()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-money"
                            width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <rect x="9" y="3" width="6" height="4" rx="2" />
                            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                            <path d="M12 17v1m0 -8v1" />
                        </svg>
                    </p>
                    <h3 class="bloque__titulo">Mensualidad</h3>
                    <p>Busca el nombre de un alumno para poder ver su mensualidad</p>
                </div>
                <!--.bloque-->
                <div class="bloque">
                    <p onclick="btnmensualidadatrasada()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-off" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M19.823 19.824a2 2 0 0 1 -1.823 1.176h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 1.175 -1.823m3.825 -.177h9a2 2 0 0 1 2 2v9" />
                    <line x1="16" y1="3" x2="16" y2="7" />
                    <line x1="8" y1="3" x2="8" y2="4" />
                    <path d="M4 11h7m4 0h5" />
                    <line x1="11" y1="15" x2="12" y2="15" />
                    <line x1="12" y1="15" x2="12" y2="18" />
                    <line x1="3" y1="3" x2="21" y2="21" />
                    </svg>
                    </p>
                    <h3 class="bloque__titulo">Mensualidad atrasada</h3>
                    <p>Muesta la mensualidades atrasadas de los alumnos</p>
                </div>
                <!--.bloque-->
                <div class="bloque">
                    <p onclick="btnmentodo()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                    <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                    </svg>
                    </p>
                    <h3 class="bloque__titulo">Mostrar todas las mensualidades</h3>
                    <p>Muestra todas las mensalidades para poder eliminar, editar o imprimir</p>
                </div>
                <!--.bloque-->
                </div>
            <!--.bloques-->
            <h2 class="comprar__titulo">Eventos</h2>
            <!----------------------------------------.eventoos-------------------------->
        <div class="bloques">
            <div class="bloque">
                    <p onclick="btnevento()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="5" width="16" height="16" rx="2" />
                    <line x1="16" y1="3" x2="16" y2="7" />
                    <line x1="8" y1="3" x2="8" y2="7" />
                    <line x1="4" y1="11" x2="20" y2="11" />
                    <rect x="8" y="15" width="2" height="2" />
                    </svg>
                    </p>
                    <h3 class="bloque__titulo">Evento</h3>
                    <p>Crea eventos para los alumbos</p>
                </div>
            <!--.bloque-->
            <div class="bloque">
                    <p onclick="btneventoal()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-plus" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="5" width="16" height="16" rx="2" />
                    <line x1="16" y1="3" x2="16" y2="7" />
                    <line x1="8" y1="3" x2="8" y2="7" />
                    <line x1="4" y1="11" x2="20" y2="11" />
                    <line x1="10" y1="16" x2="14" y2="16" />
                    <line x1="12" y1="14" x2="12" y2="18" />
                    </svg>
                    </p>
                    <h3 class="bloque__titulo">Agregar alumnos</h3>
                    <p>Agrega alumnos a los eventos ya antes creado</p>
                </div>
            <!--.bloque-->
            <div class="bloque">
                    <p onclick="btnmostrarevent()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                    </svg>
                    </p>
                    <h3 class="bloque__titulo">Mostrar eventos</h3>
                    <p>Mostrar todos los eventos</p>
            </div>
            <!--.bloque-->
            <div class="bloque">
                    <p onclick="btnalumnoseventos()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-minus" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                    <line x1="9" y1="13" x2="15" y2="13" />
                    </svg>
                    </p>
                    <h3 class="bloque__titulo">Mostrar alumnos en eventos</h3>
                    <p>Mostrar los alumnos en eventos</p>
            </div>
    </div>
            <!--.bloques-->
        </section>


    </main>


<!--INICIAR SESION-->
<script>
    function inicio() {
        var Login = document.getElementById("login")
        Login.style.display = Login.style.display == "none" ? "block" : "none"
    }
</script>



<div class="login-box" style="display: none" id="login">
    <h2>Bienvenido</h2>
    <h2>TKD Master</h2>
    </h2>
    <form method="POST">
        <div class="user-box">
            <input type="text" name="usuario" required="">
            <label>Usuario</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Contraseña</label>
          </div>
          <div class="botones-login">
          <input class="boton btn btn-white btn-animate" type="submit" name="iniciar" id="iniciar" value="iniciar">
          <input class="boton btn btn-white btn-animate" onclick="inicio()" name="boton" id="boton" value="Cerrar">
          </div>
    </form>
</div>

<!--REGISTRAR-->
<script>
    function registar() {
        var Registro = document.getElementById("registro")
        Registro.style.display = Registro.style.display == "none" ? "block" : "none"
    }
</script>

<div class="login-box" style="display: none" id="registro">
    <h2>Bienvenido</h2>
    <h2>TKD Master</h2>
    </h2>
    <form method="POST">
        <div class="user-box">
            <input type="text" name="usuario" required="">
            <label>Usuario</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Contraseña</label>
        </div>
        <div class="user-box">
            <input type="text" name="nombres" required="">
            <label>Nombres</label>
        </div>
        <div class="user-box">
            <input type="text" name="apellidoP" required="">
            <label>Apellido paterno</label>
        </div>
        <div class="user-box">
            <input type="text" name="apellidoM" required="">
            <label>Apellido Materno</label>
        </div>
        <div class="user-box">
            <input type="text" name="cinta" required="">
            <label>Cinta</label>
        </div>
        <div class="user-box">
            <input type="text" name="sucursal" required="">
            <label>Sucursal</label>
        </div>
        <div class="botones-login">
        <input class="boton btn btn-white btn-animate" type="submit" name="registrar" id="registrar" value="registrar">
        <input class="boton btn btn-white btn-animate" onclick="registar()" name="boton" id="boton" value="Cerrar">
        </div>
    </form>
</div>

<!--REGISTRAR ALUMNO-->
<script>
    function registaralumno() {
        var alumnos = document.getElementById("alumno")
        alumnos.style.display = alumnos.style.display == "none" ? "block" : "none"
    }
</script>

<div class="alumno-box" style="display: none" id="alumno">
    <h2>TKD Master</h2>
    <h2>Registrar alumno</h2>
    <form class="datos-agregar" method="POST">

      <div class="dato-box">
        <input type="text" name="nombre-alumno" required="">
        <label>Nombres:</label>
      </div>

      <div class="dato-box">
        <input type="text" name="apellido-p-alumno" required="">
        <label>Apellido Paterno:</label>
      </div>

      <div class="dato-box">
        <input type="text" name="apellido-m-alumno" required="">
        <label>Apellido Materno</label>
      </div>

      <div class="dato-box">
        <input type="date" name="fecha-inscripcion-alumno" required="">
        <label style="padding-top: 0px; top: -10px;">Fecha de inscripcion</label>
      </div>

      <div class="dato-box">
        <input type="text" name="rfc-alumno" required="">
        <label>RFC:</label>
      </div>

      <div class="dato-box">
        <input type="text" name="curp-alumno" required="">
        <label>CURP: </label>
      </div>

      <div class="radio-box">
      <?php
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
        ?>
     </div>



      <div class="radio-box">
      <?php
  
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
     ?>
     </div>
     <div class="botones-login">
      <input class="boton btn btn-white btn-animate" type="submit" name="guardaralumno" id="guardaralumno" value="Guardar">
      <input class="boton btn btn-white btn-animate" onclick="registaralumno()" name="boton3" id="boton3" value="Cerrar">
    </div>
    </form>
  </div>


<!--Buscar-->
<script>
    function btnbuscaract() {
        var busca = document.getElementById("btnbuscar")
        busca.style.display = busca.style.display == "none" ? "block" : "none"
    }
</script>

<div class="login-box" style="display: none" id="btnbuscar">
    <h2>TKD Master</h2>
        <h2>Buscar un alumno</h2>
        <form method="POST">

        <div class="user-box">
            <input type="text" name="nombre-buscar" required="">
            <label>Nombres del alumno:</label>
          </div>
                    
        <div class="user-box">
            <input type="text" name="apellido-buscar" required="">
            <label>Apellido del alumno:</label>
          </div>

          <div class="botones-login">
          <input class="boton btn btn-white btn-animate" type="submit" name="btnbuscar" id="btnbuscar" value="buscar">
          <input class="boton btn btn-white btn-animate" onclick="btnbuscaract()" name="boton4" id="boton4" value="Cerrar">
          </div>
        </form>
      </div>


<!--Eliminar-->
<script>
    function btneliminaract() {
        var elimina = document.getElementById("eliminar")
        elimina.style.display = elimina.style.display == "none" ? "block" : "none"
    }
</script>

<div class="login-box" style="display: none" id="eliminar">
    <h2>TKD Master</h2>
        <h2>Eliminar un alumno</h2>
        <form method="POST">

        <div class="user-box">
            <input type="text" name="nombre-eliminar" required="">
            <label>Nombres del alumno:</label>
          </div>

          <div class="user-box">
            <input type="text" name="apellido-eliminar" required="">
            <label>Apellido del alumno:</label>
          </div>
          <div class="botones-login">
          <input class="boton btn btn-white btn-animate" type="submit" name="btneliminar" id="btneliminar" value="Eliminar">
          <input class="boton btn btn-white btn-animate" onclick="btneliminaract()" name="boton5" id="boton5" value="Cerrar">
          </div>
        </form>
      </div>

<!--Editar-->
<script>
    function btneditaract() {
        var edita = document.getElementById("editar")
        edita.style.display = edita.style.display == "none" ? "block" : "none"
    }
</script>

<div class="login-box" style="display: none" id="editar">
    <h2>TKD Master</h2>
        <h2>Buscar un alumno para poder editar</h2>
        <form method="POST">

          <div class="user-box">
            <input type="text" name="nombre-editar" required="">
            <label>Nombres del alumno:</label>
          </div>
                    
        <div class="user-box">
            <input type="text" name="apellido-editar" required="">
            <label>Apellido del alumno:</label>
          </div>
          <div class="botones-login">
          <input class="boton btn btn-white btn-animate" type="submit" name="btneditar" id="btneditar" value="buscar">
          <input class="boton btn btn-white btn-animate" onclick="btneditaract()" name="boton6" value="Cerrar">
          </div>
        </form>
      </div>


<!--Mensualidad-->
<script>
    function btnmensualidadact() {
        var mens = document.getElementById("mensualidad")
        mens.style.display = mens.style.display == "none" ? "block" : "none"
    }
</script>

<div class="login-box" style="display: none" id="mensualidad">
    <h2>TKD Master</h2>
        <h2>Mensualidad del alumno</h2>
        <form method="POST">

          <div class="user-box">
            <input type="text" name="nombres-mensualidad" required="">
            <label>Nombre del alumno:</label>
          </div>
          <div class="user-box">
            <input type="text" name="apellido-mensualidad" required="">
            <label>Apellido del alumno:</label>
          </div>
          <div class="user-box">
            <input type="number" name="importe-mensualidad" required="">
            <label>Importe:</label>
          </div>

          <div class="user-box">
            <input type="date" name="fechapago-mensualidad" required="">
            <label style="padding-top: 0px; top: -10px;">Fecha de pago:</label>
          </div>


          <div class="botones-login">
          <input class="boton btn btn-white btn-animate" type="submit" name="btnmensualidad" id="btnmensualidad" value="Guardar">
          <input class="boton btn btn-white btn-animate" onclick="btnmensualidadact()" name="boton7" id="boton7" value="Cerrar">
          </div>
        </form>
      </div>

<!--Mensualidad atrasada-->
<script>
    function btnmensualidadatrasada() {
        var menss = document.getElementById("menatrasada")
        menss.style.display = menss.style.display == "none" ? "block" : "none"
    }
</script>
<?php
    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta=mysqli_query($db, "SELECT DISTINCT alumnoId, fechaPago
    FROM mensualidad
    WHERE fechapago < CURDATE( ) -1
    GROUP BY alumnoId
    HAVING MAX( fechaPago )
    LIMIT 0 , 30");
    
    echo     '<div class="alumno-box"  style="display: none" id="menatrasada">';
    echo     '<h2>Alumnos</h2>';
    echo     '<h2>TKD Master</h2>';

    echo     '<form class="datos-agregar" method="POST">';


     while($row = mysqli_fetch_array($consulta))
     {
      $IDALUMNO=$row['alumnoId'];
      $consulta3=mysqli_query($db, "SELECT *
      FROM `alumnos` WHERE `id` = '$IDALUMNO'");
 
      while($row3 = mysqli_fetch_array($consulta3))
      {
      echo    '<div class="user-box">';
      echo     '<p class="titulo-dato">Nombre del alumno:</p>';
      echo   '<p class="dato-dato">'.$row3['nombres'].' '.$row3['ApellidoP'].'</p>';
      echo    '</div>';
      }

     echo     '<div class="user-box">';
     echo    '<p class="titulo-dato">fecha de pago:</p>';
     echo    '<p class="dato-dato">'.$row['fechaPago'].'</p>';
     echo    '</div>';
      }
   

    
      echo  '<input class="boton btn btn-white btn-animate" onclick="btnmensualidadatrasada()"  name="boton33" id="boton33" value="Cerrar">';
      echo    '</form>';
      echo    '</div>';
    if (mysqli_connect_errno()) {
       printf("Falló la conexión: %s\n", mysqli_connect_error());
       exit();
   }

?>


<!--Mostrar todas las mensualidades-->
<script>
    function btnmentodo() {
        var mentod = document.getElementById("mentodo")
        mentod.style.display = mentod.style.display == "none" ? "block" : "none"
    }
</script>
<div class="tabla-alumnos" style="display: none" id="mentodo">
<table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0" >
<tr borde="1" aling="center" bordercolor="blue" cellspacing="0">
    <th>Alumno</th>
    <th>Importe</th>
    <th>Fecha de pago</th>
    <th>Eliminar</th>
    <th>Imprimir</th>
</tr>
<?php
    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $idprofe =$_SESSION['idProfesor'];
    $consultay=mysqli_query($db, "SELECT * FROM mensualidad ORDER BY fechaPago ASC LIMIT 0, 5");
    
     while($row0 = mysqli_fetch_array($consultay))
     {
       $IDALUMNOMEN =$row0['alumnoId'];
       
       $consulta7=mysqli_query($db, "SELECT * FROM `alumnos` WHERE `id` = '$IDALUMNOMEN'");
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

?>


<!--EVENTO-->
<script>
    function btnevento() {
        var event = document.getElementById("evento")
        event.style.display = event.style.display == "none" ? "block" : "none"
    }
</script>

<div class="login-box" style="display: none" id="evento">
    <h2>TKD Master</h2>
    <h2>Eventos</h2>
    </h2>
    <form method="POST">
        <div class="user-box">
            <input type="text" name="nombre-evento" required="">
            <label>Nombre del Evento:</label>
        </div>
        <div class="user-box">
            <input type="text" name="ubicacion-evento" required="">
            <label>Ubicacion:</label>
        </div>
        <div class="user-box">
            <input type="text" name="organizador-evento" required="">
            <label>Organizador:</label>
        </div>
        <div class="user-box">
            <input type="number" name="precio-evento" required="">
            <label>Precio Unitario: </label>
        </div>
        <div class="user-box">
            <input type="text" name="tipo-evento" required="">
            <label>Tipo de evento: </label>
        </div>

        <div class="botones-login">
        <input class="boton btn btn-white btn-animate" type="submit" name="btneventos" id="btneventos" value="Subir">
        <input class="boton btn btn-white btn-animate" onclick="btnevento()" name="boton8" id="boton8" value="Cerrar">
        </div>
    </form>
</div>

<!--Alumno Evento-->
<script>
    function btneventoal() {
        var evental = document.getElementById("alumnoevento")
        evental.style.display = evental.style.display == "none" ? "block" : "none"
    }
</script>

<div class="login-box" style="display: none" id="alumnoevento">
    <h2>TKD Master</h2>
    <h2>Agregar alumnos a eventos</h2>
    </h2>
    <form method="POST">
        <div class="user-box">
        <p>Seleccione un alumno: <input type="text" name="nombre-evento-alumno" list="listanombrealumno">
        </p>
        </div>
        <datalist id="listanombrealumno">
        <?php
        $idprofe =$_SESSION['idProfesor'];
        $consultal=mysqli_query($db, "SELECT * FROM `alumnos` WHERE maestroId = '$idprofe'");
        while($rowt = mysqli_fetch_array($consultal))
        {
      echo '<option value="'.$rowt['id'].'">';
      echo '<label>'.$rowt['nombres'].' '.$rowt['ApellidoP'].'</label>';
        }
        ?>
        </datalist>
        <div class="user-box">
        <p>Seleccione el Evento: <input type="text" name="evento-evento-alumno" list="listaeventos required=""">
        </p>
        </div>
        <datalist id="listaeventos">
        <?php
        $idprofe =$_SESSION['idProfesor'];
        $consultal=mysqli_query($db, "SELECT * FROM `eventos`");
        while($rowt = mysqli_fetch_array($consultal))
        {
      echo    '<option value="'.$rowt['nombre'].'">';
        }
        ?>
        </datalist>

        <div class="botones-login">
        <input class="boton btn btn-white btn-animate" type="submit" name="btneventoalumno" id="btneventoalumno" value="Subir">
        <input class="boton btn btn-white btn-animate" onclick="btneventoal()" name="boton8" id="boton8" value="Cerrar">
        </div>
    </form>
</div>

<!--mostrar los eventos-->
<script>
    function btnmostrarevent() {
        var todosevent = document.getElementById("todoevento")
        todosevent.style.display = todosevent.style.display == "none" ? "block" : "none"
    }
</script>

<div class="tabla-alumnos" style="display: none" id="todoevento">
<table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
<tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
    <th>Numero del evento</th>
    <th>Ubicacion</th>
    <th>Organizador</th>
    <th>Precio Unitario</th>
    <th>Tipo de Evento</th>
    <th>Eliminar</th>
</tr>
<?php 
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
?>
</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento1" id="btnevento1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento2" id="btnevento2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento3" id="btnevento3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento4" id="btnevento4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="btnevento5" id="btnevento5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btnmostrarevent()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>

<!--Mostrar alumnos en eventos -->
<script>
    function btnalumnoseventos() {
        var alevent = document.getElementById("alumnoseventos")
        alevent.style.display = alevent.style.display == "none" ? "block" : "none"
    }
</script>
<?php
    echo     '<div class="alumno-box"  style="display: none" id="alumnoseventos">';
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
}
    echo    '</div>';
echo        '<div class="secciones-btn-evento">
            <input class="boton btn btn-white btn-animate" type="submit" name="btneventalum1" id="btneventalum1" value="1">
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

?>

<!--Todos los alumnos-->
<script>
    function btntodoact() {
        var todos = document.getElementById("todo")
        todos.style.display = todos.style.display == "none" ? "block" : "none"
    }
</script>

<div class="tabla-alumnos" style="display: none" id="todo">
<table class="tabla" borde="1" aling="center" bordercolor="white" cellspacing="0">
<tr borde="1" aling="center" bordercolor="blue" cellspacing="0" >
    <th>Numero de alumno</th>
    <th>Nombres</th>
    <th>Fecha de Inscripcion</th>
    <th>RFC</th>
    <th>CURP</th>
    <th>Maestro</th>
    <th>Cinta</th>
</tr>
<?php 
    $idprofe =$_SESSION['idProfesor'];

    $db=mysqli_connect('127.0.0.1','tkdmaster','46d0596e3','tkdmaster');
    if(!$db){
        echo "Error en la conexión";
    }
    $consulta9=mysqli_query($db, "SELECT *
     FROM `alumnos` Where `maestroId` = '$idprofe' LIMIT 0, 5");

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
?>
</table>

<form method="POST">
<div class="secciones-btn">
<input class="boton btn btn-white btn-animate" type="submit" name="btn1" id="btn1" value="1">
<input class="boton btn btn-white btn-animate" type="submit" name="btn2" id="btn2" value="2">
<input class="boton btn btn-white btn-animate" type="submit" name="btn3" id="btn3" value="3">
<input class="boton btn btn-white btn-animate" type="submit" name="btn4" id="btn4" value="4">
<input class="boton btn btn-white btn-animate" type="submit" name="btn5" id="btn5" value="5">
</div>
</form>

<div class="boton-tabla">
<input class="boton btn btn-white btn-animate" onclick="btntodoact()" name="boton01" id="boton01" value="Cerrar">
</div>

</div>
    </main>
    <footer class="footer">
        <p class="footer__texto">TKD MASTER - Todos los derechos Reservados 2022.</p>
    </footer>

</body>

</html>
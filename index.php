<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  if (!isset($_SESSION['idProfesor'])){
    include ("includes/validar.php");
  }
  include ("includes/registrar.php");
  include ("includes/enviar.php");
  
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
          <a href="torneos.php">Torneos</a>
          <a href="nosotros.php">Nosotros</a>';
          }else{
    echo '<a href="index.php">Inicio</a>
          <a href="inscripciones.php">Inscripciones</a>
          <a href="torneos.php">Torneos</a>
          <a href="nosotros.php">Nosotros</a>
          <a href="herramientas.php">Herramientas</a>';
          }
    ?>
    </nav>
  </div>



  <section class="hero">
    <div class="contenido-hero">
      <h2 class="titulo">Taekwondo <span>MASTER</span></h2>

      <div class="ubicacion">
        <p style="color: white">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="56" height="56"
          viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <line x1="18" y1="6" x2="18" y2="6.01" />
          <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
          <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
          <line x1="9" y1="4" x2="9" y2="17" />
          <line x1="15" y1="15" x2="15" y2="20" />
        </svg>
        Guadalajara, Jal. </p>
      </div>
      <div class="text-box">
        <a class="boton btn btn-white btn-animate" href="#contactanos">Contactar</a>
      </div>
    </div>

  </section>

  <main class="contenedor sombra">
    <h2>Servicios</h2>

    <div class="servicios">

      <section class="servicio">
        <h3>Curso</h3>

        <div class="iconos">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trophy" width="56" height="56"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="8" y1="21" x2="16" y2="21" />
            <line x1="12" y1="17" x2="12" y2="21" />
            <line x1="7" y1="4" x2="17" y2="4" />
            <path d="M17 4v8a5 5 0 0 1 -10 0v-8" />
            <circle cx="5" cy="9" r="2" />
            <circle cx="19" cy="9" r="2" />
          </svg>
        </div>

        <p>Manejamos muchos cursos intensivos sobre el Taekwondo en el cual te enseñamos desde lo mas basico
          hasto lo mas avanzado pero sobre todo aprende a divertirte haciendo actividades fisicas y conociendo amigos
          aprendemos tanto defensa personal como artes marciales.
        </p>
      </section class="servicio">

      <section class="servicio">
        <h3>Entrenamiento</h3>
        <div class="iconos">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-karate" width="56" height="56"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <circle cx="18" cy="4" r="1" />
            <path d="M3 9l4.5 1l3 2.5" />
            <path d="M13 21v-8l3 -5.5" />
            <path d="M8 4.5l4 2l4 1l4 3.5l-2 3.5" />
          </svg>
        </div>
        <p>El Entrenamiento es basico se empieza desde donde el usuario puede ir aprendiendo y acostumbrando su cuerpo.
        </p>
      </section>

      <section class="servicio">
        <h3>Administración</h3>
        <div class="iconos">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-apps" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="4" y="4" width="6" height="6" rx="1" />
  <rect x="4" y="14" width="6" height="6" rx="1" />
  <rect x="14" y="14" width="6" height="6" rx="1" />
  <line x1="14" y1="7" x2="20" y2="7" />
  <line x1="17" y1="4" x2="17" y2="10" />
</svg>
        </div>
        <p>Tenemos los recursos basicos para llevar la mejor administración para tu negocio de Tae Kwon Do, 
        conociendo todo lo escencial que se necesita para ello. 
        </p>

      </section class="servicio">

    </div>
    <!--cierre de servicios-->


    <section id="contactanos">
      <h2>Contacto</h2>

      <form class="formulario" id="contactform" method="post">
        <fieldset>
          <legend>Conctactanos llenando todos los campos</legend>

          <div class="contenedor-campos">
            <div class="campos">
              <label>Nombre</label>
              <input class="input-text" name="nombre-contact" type="text" placeholder="Tu nombre" required="">
            </div class="campos">

            <div class="campos">
              <label>Correo</label>
              <input class="input-text" name="email-contact" type="email" placeholder="Tu correo" required="">
            </div class="campos">

            <div class="campos">
              <label>Telefono</label>
              <input class="input-text" name="numero-contact" type="number" placeholder="Tu Telefono" required="">
            </div class="campos">

            <div class="campos">
              <label>Mensaje</label>
              <textarea class="input-text" name="mensaje-contact" required=""></textarea>
            </div class="campos">

            <div class="alinear-derecha">
              <input class="boton w-100" type="submit" name="enviardato" id="enviardato" value="Enviar">
            </div>
          </div>

        </fieldset>
      </form>
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

  <footer class="footer">
    <p class="footer__texto">TKD MASTER - Todos los derechos Reservados 2022.</p>
  </footer>

</body>

</html>
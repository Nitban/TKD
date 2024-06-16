<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['idProfesor'])){
    include ("includes/registrar.php");
    include ("includes/validar.php");
}
   ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda TKD Master</title>
    <link rel="stylesheet" href="css/normalizeTienda.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleTienda.css">
</head>

<body>
    <header class="site-header">
        <div>
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-facebook " width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-twitter " width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-pinterest " width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="8" y1="20" x2="12" y2="11" />
                            <path
                                d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" />
                            <circle cx="12" cy="12" r="9" />
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-youtube " width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="5" width="18" height="14" rx="4" />
                            <path d="M10 9l5 3l-5 3z" />
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-instagram " width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
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

    <nav class="navegacion">
    <?php
        if (!isset($_SESSION['idProfesor'])){
    echo'<ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotrosTienda.php">Nosotros</a></li>
            <li><a href="tiendaBD.php">TiendaBD</a></li>
         </ul>';
        }else{
            echo'<ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotrosTienda.php">Nosotros</a></li>
            <li><a href="tiendaBD.php">TiendaBD</a></li>
            <li><a href="herramientas.php">Herramientas</a></li>
         </ul>';
        }
    ?>
    </nav>

    <main class="contenedor">
        <h1>Nuestros Productos</h1>

        <div class="grid">
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/1.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">VueJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/2.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">AngularJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/3.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">ReactJS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/4.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Redux</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/5.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Node.js</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/6.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">SASS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/7.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">HTML5</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/8.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Github</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/9.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">BulmaCSS</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/10.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">TypeScript</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/11.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Drupal</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/12.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">JavaScript</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/13.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">GraphQL</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->
            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="imgTienda/14.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">WordPress</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>
            <!--.producto-->

            <div class="grafico grafico--camisas"></div>
            <div class="grafico grafico--node"></div>
        </div>
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
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
        <h1> Pedido registrado en JSON - PHP</h1>
        <div id="cuadricula">
            <table class="grilla" id="tablajson">
            <thead>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>SubTotal</th>
            <th>Modificar</th>
            <th>Eliminar</th>
            </thead>
        </div>

        <?php
        $NombreArchivo=Date("F_j_Y")."_pedido.json";
        $Total=0;
        if(file_exists($NombreArchivo)){
            $archivo = file_get_contents($NombreArchivo);
            $productos = json_decode($archivo);
            
            foreach ($productos as $producto) {
                echo '<tr><td>'.$producto->{'nombre'}.'</td>';
                echo '<td>$'.$producto->{'precio'}.'</td>';
                echo '<td>'.$producto->{'cantidad'}.'</td>';
                echo '<td>$'.$producto->{'subtotal'}.'</td>';
                echo '<td><a  href="modificarBD.php?nombre='.$producto->{'nombre'}.'"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                <line x1="16" y1="5" x2="19" y2="8" />
              </svg></a></td>';
                echo '<td><a  href="eliminarBD.php?nombre='.$producto->{'nombre'}.'"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d94f5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="4" y1="7" x2="20" y2="7" />
                <line x1="10" y1="11" x2="10" y2="17" />
                <line x1="14" y1="11" x2="14" y2="17" />
                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
              </svg></a></td></tr>';
                $Total=$Total+$producto->{'subtotal'};
                $TotalIVA=$Total+($Total*.16);
            }
        }
        else{
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=tiendaDB.php>';
        }

        ?>
        </table>
        <div id="Total">
            <?php
            echo '<p class="Total"> Total: $'.$Total.'</p>';
            echo '<p class="Total"> Total a pagar: $'.$TotalIVA.'</p>';
            ?>
        </div>
        <div>
        <?php   
            $nombreArchivo=Date(F_j_Y)."_pedido.json";
            if(file_exists($nombreArchivo)){
                echo '<a href="'.$nombreArchivo.'"><h2>Mostrar JSON</h2></a>';
            }
        ?>
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
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <title>Registrarte</title>
    

</head>

<body>
    <div class="login-box">
        <h2>Bienvenido</h2>
        <h2>TKD Master</h2></h2>
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
          <input class="boton btn btn-white btn-animate" type="submit" name="registrar" id="registrar" value="registrar">
          Registrarte
        </input>
        </form>
      </div>
   
</body>
</html>
<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['idProfesor'])){
  include ("includes/validar.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <title>Login</title>

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
          <input class="boton btn btn-white btn-animate" type="submit" name="iniciar" id="iniciar" value="iniciar">
          iniciar
        </input>
          <input class="boton btn btn-white btn-animate" type="submit" name="boton" id="boton" value="registrar">
          Registrarte
        </input>
        </form>
      </div>
   
</body>
</html>
<?php 

include ("db.php"); 

if (isset($_POST['registrar'])){
    if (strlen($_POST['usuario'])>=1&&
    strlen($_POST['password'])>=1&&
    strlen($_POST['nombres'])>=1&&
    strlen($_POST['apellidoP'])>=1&&
    strlen($_POST['apellidoM'])>=1&&
    strlen($_POST['cinta'])>=1&&
    strlen($_POST['sucursal'])>=1)
    {
     
     $user = trim($_POST['usuario']);
     $passwoord = trim($_POST['password']);
     //Encriptacion de contraseña
     $passwordEncrypt = password_hash($passwoord, PASSWORD_DEFAULT, ['cost => 10']);
     $nombres = trim($_POST['nombres']);
     $apellidoP = trim($_POST['apellidoP']);
     $apellidoM = trim($_POST['apellidoM']);
     $cinta = trim($_POST['cinta']);
     $sucursal = trim($_POST['sucursal']);
     if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

     $consulta = "INSERT INTO maestros ( nombres, apellidoP, apellidoM, cinta, usuario, pass, sucursal) 
     VALUES ('$nombres','$apellidoP','$apellidoM','$cinta','$user','$passwordEncrypt','$sucursal')";
     //Verificacion de usuario duplicado
     $verificar_usuario = mysqli_query($db, "SELECT * FROM maestros WHERE usuario='$user'"); 
     if (mysqli_num_rows($verificar_usuario)>0){
         echo '
         <script>
         alert ("Este usuario ya esta registrado, intente de nuevo");
         window.location = "index.php"; 
         </script>
         
         ';
         exit();
     }
     //Terminacion de usuario duplicado
     $resultado = mysqli_query($db,$consulta);
     echo ($consulta); 
    if ($resultado){
       echo ("Se ha subido correctamente");
    }else {

        echo ("Error al subir el usuario"); 
    }
    }else {
        echo ("Llena todos los datos"); 
    }
}


?>
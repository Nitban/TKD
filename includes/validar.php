<?php
session_start();
include("db.php");

if (!isset($_SESSION['idProfesor']))
{
    if (isset($_POST['iniciar'])){
        $usuario=$_POST['usuario'];
        $password =($_POST['password']);
        $consultaPass = ("SELECT pass FROM maestros WHERE usuario='$usuario'");
        $resultado3 = mysqli_query($db,$consultaPass); 
        $passEncrypt = mysqli_fetch_array($resultado3, MYSQLI_ASSOC); 
        if (password_verify($password, $passEncrypt["pass"])){
            
           $consulta=("SELECT * FROM maestros WHERE usuario='$usuario'");
           $id=("SELECT id FROM maestros WHERE usuario='$usuario'");

           $resultado=mysqli_query($db,$consulta);
           $resultado2=mysqli_query($db,$id);
           $filas = mysqli_num_rows($resultado);

           $idProfesor = mysqli_num_rows($resultado2);
           $row = mysqli_fetch_array($resultado2, MYSQLI_ASSOC);
           $_SESSION["idProfesor"]=$row["id"];
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }
         
        if ($filas){
            header("location:index.php");
           // $_SESSION['username'] = $Ragnar;
            echo("Bienvenido");
            echo($idProfesor);
            
        }else{
            echo("Error en la autenticacion");
        }
         
        }
    
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

}
else
{
    echo "<script>
    window.location='index.php';
    </script> ";
}






?>
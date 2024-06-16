<?php 
if (isset($_POST['enviardato'])){
    if (strlen($_POST['nombre-contact'])>=1&&
    strlen($_POST['email-contact'])>=1&&
    strlen($_POST['numero-contact'])>=1&&
    strlen($_POST['mensaje-contact'])>=1)
    {

$name = $_POST['nombre-contact'];
$email = $_POST['email-contact'];
$telefono = $_POST['numero-contact'];
$message = $_POST['mensaje-contact'];

$destinatario = 'taekowdomaster@gmail.com';
$asunto = "Nuevo mensaje: $subject";
$mensaje = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Telefono: $telefono \n Mensaje: \n $message";
$headers = "From: $email\r\nReply-to: $email";

mail($destinatario, $asunto, $mensaje, $headers);
echo "El mensaje se ha enviado correctamente";
    }else {
        echo ("Llena todos los datos"); 
    }
}
?>
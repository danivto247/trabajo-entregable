<?php
require_once "conexion.php";
session_start();
$usuario = $_SESSION["username"];


$q="SELECT *from usuarios WHERE usuario = '$usuario'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);
$destinatario = $array['correo'];
$asunto = "se le hara un recuerdo de la suscripcion de spotify :D en 29 dias";
$cuerpo = "
<html> 
    <head> 
        <title>Prueba de correo</title> 
    </head> 
    <body> 
        <h1>Hola amigo!</h1> 
        <p> 
            <b>a utilizado el servicio de proyecto x por lo cual se le informara sobre un recuedo de paga de su suscripcion
        </p> 
    </body> 
</html>
";
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: el equipo de proyecto x <1275252@senati.pe>\r\n";
//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: 1275252@senati.pe\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "<script>alert('se envio satisfactoriamente')</script>";
?>
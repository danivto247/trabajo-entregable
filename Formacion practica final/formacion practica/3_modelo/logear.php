<?php
require_once "conexion.php";
session_start();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$q = "SELECT * from usuarios WHERE usuario = '$usuario' and contraseña = '$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);
if($array){
    $_SESSION["username"] = $usuario;
    header("location: ../1_vista/portafolio.php");
}
else{
    echo "datos incorrectos";
}
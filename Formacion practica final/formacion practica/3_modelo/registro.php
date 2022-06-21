<?php
require_once "conexion.php";

if (isset($_POST["submit"])){
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    
    $q = "SELECT * from usuarios WHERE correo='$correo'";
    $result = mysqli_query($conexion, $q);
    if(!$result->num_rows > 0){
        $q = "INSERT INTO usuarios(usuario, correo, contraseña, admin) VALUES('$usuario', '$correo', '$contraseña', 0)";
        $result = mysqli_query($conexion, $q);
        if($result){
            echo "<script>alert('Usuario registrado con exito')</script>";
            header("location: ../1_vista/loginvista.php");
            $usuario="";
            $correo="";
            $contraseña='';
        }
        else{
            echo "<script>alert('hay un error')</script>";
        }
    }
    else{
        echo "<script>alert('el correo ya existe')</script>";
    }
}
?>
<?php
    #conexion a la base de datos
    require_once '3_modelo/conexion.php';
    conectar();
    #mostrar la plantilla y el resultado

    require_once '2_controlador/controlador.php';
    $mvc = new McvControlador();
    $mvc ->plantilla();
    $mvc2 = new McvControlador();
    $mvc2->login(); 
?>

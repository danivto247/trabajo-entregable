<?php
    #mostrar la plantilla y el resultado

    require_once '2_controlador/controlador.php';
    $mvc = new McvControlador();
    $mvc ->plantilla();
    $mvc2 = new McvControlador();
    $mvc2->login(); 
?>

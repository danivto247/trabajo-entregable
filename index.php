<?php
    include('conexion.php');
    $con=conectar();
    echo "$con";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <tiles>SUSCRIPCIONES DE PAGO</tiles>
        <meta name="author" content="Grupo 2">
        <meta name="generador" content="Wordpress 5.0">
        <meta name="copyright" content="">
        <meta name="robots" content="index, followe">
        <meta name="keywords" content="aplicacion web de seguimiento de suscripciones para recordar pagos">
        <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="grid-container">
        <div class="uno">Años</div>
        <div class="uno">Fechas de Pagos</div>
        <div class="uno">Medios de Pagos</div>  
        <div class="dos">
            
        </div>
        <div class="dos">
            <div class="cont_pago">Pago1</div>
            <div class="cont_pago">Pago2</div>
        </div>
        <div class="dos">
            <div class="cont_medios">INTERBANK</div>
            <div class="cont_medios">BBVA</div>
            <div class="cont_medios">BANCO DE LA NACION</div>
            <div class="cont_medios">BCP</div>
            <div class="cont_medios">SCOTIABANK</div>
        </div>
      </div>
</body>
</html>
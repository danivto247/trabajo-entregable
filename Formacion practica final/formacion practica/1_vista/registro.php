<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>INICIAR SESION</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initialscale=1.0, maximum-scale=3.0,minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/estilosRegistro.css">

</head>
<body>
    <form method="post" action="../3_modelo/registro.php" class="formulario">
        <h1>Registrate</h1>
            <div class="contenedor">

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" name="usuario" placeholder="Usuario">
            </div>

            <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" name="correo" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" name="contraseña" placeholder="Contraseña">
            </div>
            <input type="submit" name="submit" class="button">
            <p>Al registrate, aceptas nuestras Condiciones de uso y Politica de privacidad</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php"> Iniciar Sesion</a></p>
        </div>
    </form>
</body>
</html>
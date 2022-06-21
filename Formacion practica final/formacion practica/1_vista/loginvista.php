<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initialscale=1.0, maximum-scale=3.0,minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/estilosRegistro.css">
    
</head>
<body>
    <form method="post" action="../3_modelo/logear.php" class="formulario" >
        <h1>Iniciar Sesion</h1>
            <div class="contenedor">

            <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" name="usuario" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" name="clave" placeholder="Contraseña">
            </div>
            <input type="submit" value="Login" class="button" >

            <p>Al registrate, aceptas nuestras Condiciones de uso y Politica de privacidad</p>
            <p>¿No tienes una cuenta?<a class="link" href="registro.php"> Registrate</a></p>
        </div>
    </form>
</body>
</html>
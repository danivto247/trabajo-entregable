<?php
require_once "../3_modelo/conexion.php";
session_start();
$usuario = $_SESSION["username"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container p-5 my-5 border">
        <h2>usuarios</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">usuario</th>
                    <th scope="col">email</th>
                    <th scope="col">contraseña</th>
                    <th scope="col">admin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($conexion->query("SELECT * from usuarios")as $row){
                ?>
                <tr>
                    <td><?php echo $row["id_usuario"] ?></th>
                    <td><?php echo $row["usuario"] ?></td>
                    <td><?php echo $row["correo"] ?></td>
                    <td><?php echo $row["contraseña"] ?></td>
                    <td><?php echo $row["admin"] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container p-5 my-5 border">
        <h2>proveedores</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($conexion->query("SELECT * from proveedores")as $row){
                ?>
                <tr>
                    <td><?php echo $row["id_proveedor"] ?></th>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["precio"] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="d-grid">
        <a href="portafolio.php" type="button" class="btn btn-primary btn-block">salir</a>
    </div>
</body>
</html>
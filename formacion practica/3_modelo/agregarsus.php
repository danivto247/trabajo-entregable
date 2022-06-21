<?php
require_once "conexion.php";
session_start();
$usuario = $_SESSION["username"];

$agregar = "INSERT INTO suscripcion (`id_usuarios`, `id_proveedores`) SELECT id_usuario, id_proovedor FROM usuarios E join proovedores D ON E.id_usuario = D.id_proovedores";
?>
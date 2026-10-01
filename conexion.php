<?php
$host = "localhost";
$user = "root";
$password = "Admin123."; // Usa la contraseña que configuraste en tu instalación
$database = "museo_almacen";

$conexion = new mysqli($host, $user, $password, $database);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>
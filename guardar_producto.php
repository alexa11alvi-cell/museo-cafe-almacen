<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $peso_medida = $_POST['peso_medida'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO productos (fecha, nombre, cantidad, peso_medida, estado) 
            VALUES ('$fecha', '$nombre', '$cantidad', '$peso_medida', '$estado')";

    if ($conexion->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Producto guardado con éxito"]);
    } else {
        echo json_encode(["status" => "error", "message" => $conexion->error]);
    }
}
?>

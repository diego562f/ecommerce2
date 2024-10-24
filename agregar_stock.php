<?php
include("conexion_emplea.php");
$con = connection();

$id_produc = $_POST["id"];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];

// Using prepared statements to prevent SQL injection
$stmt = $con->prepare("INSERT INTO productos (id, producto, marca, cantidad, descripcion, categoria) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ississ", $id_produc, $producto, $marca, $cantidad, $descripcion, $categoria);

if ($stmt->execute()) {
    header("Location: empleados.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>

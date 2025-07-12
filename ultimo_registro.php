<?php
require_once 'class/conexion.php';
// Assuming the connection is established in conexion.php

$sql = "INSERT INTO clientes (
    nombre,
    apellido_paterno,
    apellido_materno,
    whatsapp,
    direccion,
    descripcion_direccion,
    fecha_nacimiento)
VALUES (
    'Rodrigo',
    'Lara',
    'Muñoz',
    '2221773607',
    'calle 123',
    'descripcion de la direccion',
    '1990-01-01')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close connection
$conn->close();
?>
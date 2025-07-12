<?php
require_once 'class/conexion.php';
// Assuming the connection is established in conexion.php
// You can now use the $conn variable to interact with the database
    $sql = "INSERT INTO clientes (
    nombre,
    apellido_paterno,
    apellido_materno,
    whatsapp,
    fecha_nacimiento)
VALUES (
    'Rodrigo',
    'Lara',
    'Muñoz',
    '2221773607',
    '1990-01-01');";

    $sql_2 = "INSERT INTO direcciones (
    direccion_1,
    descripcion_direccion_1,
    direccion_2,
    descripcion_direccion_2)
VALUES (
    'calle 123',
    'descripcion de la direccion',
    'calle 456',
    'descripcion de la direccion 2')";

if ($conn->query($sql) === TRUE) {
  echo "New cliente created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql_2) === TRUE) {
    echo "New direccion created successfully";
} else {
    echo "Error: " . $sql_2 . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>
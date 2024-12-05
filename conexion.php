<?php
// conexion.php
$host = 'localhost';  // Cambia si tu servidor de base de datos no está en localhost
$usuario = 'root';    // Tu usuario de MySQL
$contraseña = '';     // Tu contraseña de MySQL
$base_de_datos = 'tienda';  // El nombre de tu base de datos

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

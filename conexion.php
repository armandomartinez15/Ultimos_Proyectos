<?php
$servername = "localhost";
$username = "root"; // Cambia esto por tu usuario real
$password = "";     // Si no tienes contraseña para el usuario 'root', déjalo vacío
$dbname = "momin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

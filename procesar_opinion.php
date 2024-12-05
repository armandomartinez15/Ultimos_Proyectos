<?php
include 'conexion.php';

// Verificar que se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $correo = $conn->real_escape_string($_POST['correo']);
    $numero = $conn->real_escape_string($_POST['numero']);
    $comentario = $conn->real_escape_string($_POST['comentario']);
    
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO opiniones (nombre, correo, numero, comentario, fecha_envio)
            VALUES ('$nombre', '$correo', '$numero', '$comentario', NOW())";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p>¡Opinión guardada exitosamente! <a href='guardar_opinion.php'>Ver opiniones</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

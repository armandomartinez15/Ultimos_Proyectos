{<?php
// Configuración de la base de datos
$host = "127.0.0.1"; // Cambia si tu base de datos usa otro host
$user = "root";      // Usuario por defecto de XAMPP
$pass = "";          // Contraseña vacía por defecto de XAMPP
$db = "tienda";      // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Procesar la imagen
$imagen = $_FILES['imagen']['name'];
$rutaImagen = "uploads/" . basename($imagen);

// Mover la imagen a la carpeta "uploads"
if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen)) {
    // Insertar datos en la base de datos
    $sql = "INSERT INTO productos (clave, nombre, precio, cantidad, imagen) 
            VALUES ('$clave', '$nombre', $precio, $cantidad, '$rutaImagen')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?status=success");
    } else {
        header("Location: index.php?status=error");
    }
} else {
    header("Location: index.php?status=error");
}

// Cerrar conexión
$conn->close();
?>
}
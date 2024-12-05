<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario si se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturar los datos del formulario
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // Subir imagen si se proporciona
    $imagen = null;
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $imagen = 'uploads/' . $_FILES['imagen']['name'];
        // Mover la imagen al directorio de destino
        move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen);
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO productos (nombre, precio, cantidad, imagen) 
            VALUES ('$nombre', '$precio', '$cantidad', '$imagen')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado correctamente.";
    } else {
        echo "Error al agregar el producto: " . $conn->error;
    }
}

// Verificar si se ha enviado la solicitud de eliminación
if (isset($_GET['eliminar'])) {
    $id_producto = $_GET['eliminar'];

    // Eliminar producto de la base de datos
    $sql = "DELETE FROM productos WHERE id = $id_producto";

    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }
}

// Consultar los productos registrados
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        button {
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
            padding: 5px 10px;
            font-size: 14px;
        }
        button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="formulario.php">Agregar Nuevo Producto</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Imagen</th>
                <th>Acciones</th> <!-- Nueva columna para las acciones -->
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Mostrar productos
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>$" . $row['precio'] . "</td>";
                    echo "<td>" . $row['cantidad'] . "</td>";
                    echo "<td><img src='" . $row['imagen'] . "' alt='Imagen' width='50'></td>";
                    // Botón de eliminación
                    echo "<td><a href='?eliminar=" . $row['id'] . "'><button>Eliminar</button></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No hay productos registrados.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Cerrar conexión
$conn->close();
?>

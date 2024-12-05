<!-- formulario.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"],
        button {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="index.php">Ver registro</a>

    <h1>Formulario de productos</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <!-- Se elimina este campo: clave -->
        <!-- <label for="clave">Clave del producto:</label>
        <input type="text" id="clave" name="clave" required> -->
        
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>
        
        <label for="imagen">Subir imagen:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*">
        
        <button type="submit">Agregar Producto</button>
    </form>
</body>
</html>

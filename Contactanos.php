<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Filosofía de Kanye West</title>
    <style>
        /* Estilo base */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            width: 100%;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
            background-color: #fff;
        }

        .navegacion {
            width: 80%;
            margin: 0 auto;
        }

        .navegacion ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
            background-color: #ffffff;
            border-radius: 8px;
        }

        .menu > li {
            position: relative;
        }

        .menu > li > a {
            display: block;
            padding: 15px 20px;
            color: #353535;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s, background-color 0.3s;
        }

        .menu li a:hover {
            color: #CE7D35;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .submenu {
            position: absolute;
            background: #333;
            width: 160px;
            border-radius: 8px;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.5s, visibility 0.5s;
            top: 100%;
            left: 0;
        }

        .submenu li a {
            display: block;
            padding: 10px 15px;
            color: black;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .submenu li a:hover {
            background-color: #444;
            border-radius: 5px;
        }

        .menu li:hover .submenu {
            visibility: visible;
            opacity: 1;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5em;
            margin: 0;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 30px;
            background-color: #444;
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-size: 1.1em;
        }

        nav a:hover {
            background-color: #666;
        }

        .content {
            padding: 40px 20px;
            margin: 0 15%;
            text-align: left;
        }

        /* Sección "Contactos" */
        #contactos {
            background-color: #e3f2f9;
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #contactos h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        td input, td textarea {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        .submit-btn {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
        }

        .submit-btn:hover {
            background-color: #666;
        }

        .message {
            display: none;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin-top: 20px;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="/LuisMartinez/Menu/Inicio.php">Inicio</a></li>
                <li><a href="/LuisMartinez/Menu/Nosotros.php">Nosotros</a></li>
                <li><a href="/LuisMartinez/Menu/Productos.php">Alimentos</a>
                    <ul class="submenu">
                        <li><a href="carbohidratos.php">Ricos en carbohidratos</a></li>
                        <li><a href="proteinas.php">Ricos en proteinas</a></li>
                        <li><a href="grasas_saludables.php">Ricos en grasas saludableis</a></li>
                        <li><a href="entrenamiento.php">Antes de tu entrenamiento</a></li>
                    </ul>
                </li>
                <li><a href="/LuisMartinez/Menu/Contactanos.php">Contactos</a></li>
                 <a href="/LuisMartinez/Menu/Menu_MartinezLuis.php" class="back-button">Menú Principal</a>
            </ul>
        </nav>
    </header>

<!-- Sección Contactos -->
<div class="content" id="contactos">
    <h2>Deja tu Opinión</h2>
    <form id="contactForm" action="procesar_opinion.php" method="post">
        <table>
            <tr>
                <th>Nombre</th>
                <td><input type="text" name="nombre" required placeholder="Ingresa tu nombre"></td>
            </tr>
            <tr>
                <th>Correo</th>
                <td><input type="email" name="correo" required placeholder="Ingresa tu correo"></td>
            </tr>
            <tr>
                <th>Número</th>
                <td><input type="tel" name="numero" required placeholder="Ingresa tu número"></td>
            </tr>
            <tr>
                <th>Comentario</th>
                <td><textarea name="comentario" required placeholder="Escribe tu comentario aquí..."></textarea></td>
            </tr>
        </table>

        <button type="submit" class="submit-btn">Enviar</button>
    </form>
</div>

</body>
</html>

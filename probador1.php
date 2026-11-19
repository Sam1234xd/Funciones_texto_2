<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Generador de claves de identificacion</h1>

     <form method="POST" action="">

        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha" required>
        <br><br>

        <input type="submit" name="generar" value="Generar clave">
    </form>

    <?php
    // Incluir las funciones del ejercicio 1
    require_once("generador_claves.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['generar'])) {

        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];

        $clave = generarClave($nombre, $fecha);

        echo "<h3>Tu clave de identificacion es:</h3>";
        echo "<strong>$clave</strong>";
    }
    ?>
</form>
</body>
</html>
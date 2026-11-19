<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Generador de nombres de usuario</h1>

    <form method="POST" action="">

        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Institucion:</label>
        <input type="text" name="institucion" required>
        <br><br>

        <label>Año:</label>
        <input type="number" name="anio" required>
        <br><br>

        <input type="submit" name="generar" value="Generar usuario">
    </form>

    <?php
    // Incluir las funciones del ejercicio 2
    require_once("generador_usuario.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['generar'])) {

        $nombre = $_POST['nombre'];
        $institucion = $_POST['institucion'];
        $anio = $_POST['anio'];

        $usuario = generarUsuario($nombre, $institucion, $anio);

        echo "<h3>Tu nombre de usuario es:</h3>";
        echo "<strong>$usuario</strong>";
    }
    ?>

</body>
</html>
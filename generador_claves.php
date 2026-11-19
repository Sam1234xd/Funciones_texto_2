<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Obtener las primeras 3 letras del nombre
function obtenerIniciales($nombre) {
    $nombre = trim($nombre);
    $cantidad = strlen($nombre);

    if ($cantidad > 0) {
        $letras = substr($nombre, 0, 3);
        return strtoupper($letras);
    }
}

// Obtener los ultimos 2 digitos del año
function obtenerAnio($fecha) {
    return substr($fecha, 2, 2);
}

// Obtener el mes y el dia
function obtenerMesDia($fecha) {
    $mes = substr($fecha, 5, 2);
    $dia = substr($fecha, 8, 2);
    return $mes . $dia;
}

// Generar la clave completa
function generarClave($nombre, $fecha) {
    $iniciales = obtenerIniciales($nombre);
    $anio = obtenerAnio($fecha);
    $mesDia = obtenerMesDia($fecha);

    return $iniciales . $anio . $mesDia;
}

?>
</body>
</html>
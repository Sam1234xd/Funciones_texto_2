<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Limpiar el nombre completo
function limpiarNombre($nombre) {
    $nombre = trim($nombre);
    $cantidad = strlen($nombre);

    if ($cantidad > 0) {
        $nombre = str_replace(" ", "", $nombre);
    }

    return $nombre;
}

// Convertir el nombre a minusculas
function convertirMinusculas($texto) {
    return strtolower($texto);
}

// Obtener las primeras 2 letras de la institucion
function obtenerInstitucion($institucion) {
    $institucion = trim($institucion);
    $letras = substr($institucion, 0, 2);

    return strtolower($letras);
}

// Obtener los ultimos 2 digitos del año
function obtenerAnio($anio) {
    return substr($anio, -2);
}

// Generar el nombre de usuario completo
function generarUsuario($nombre, $institucion, $anio) {
    $nombre = limpiarNombre($nombre);
    $nombre = convertirMinusculas($nombre);
    $institucion = obtenerInstitucion($institucion);
    $anio = obtenerAnio($anio);

    return $nombre . $institucion . $anio;
}

?>
</body>
</html>
<?php
$idiomas = [
    'es' => '¡Bienvenido! Esta es la página en español.',
    'en' => 'Welcome! This is the page in English.',
    'ca' => 'Benvingut! Aquesta es la pàgina en català.'
];

$idiomaUsuario = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

function obtenerIdioma($idiomaUsuario, $idiomas) {
    $idiomasPreferidos = explode(',', $idiomaUsuario);

    foreach ($idiomasPreferidos as $idioma) {
        $idioma = substr($idioma, 0, 2);

        if (array_key_exists($idioma, $idiomas)) {
            return $idioma;
        }
    }
    return 'en';
}

$idioma = obtenerIdioma($idiomaUsuario, $idiomas);
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>
    <h1><?php echo $idiomas[$idioma]; ?></h1>
</body>
</html>

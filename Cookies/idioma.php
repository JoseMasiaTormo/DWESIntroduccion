<?php 
    $idioma = ($_GET["setLanguage"] ?? ($_COOKIE["setLanguage"] ?? "es"));
    setcookie("idioma", $idioma, time() + 30 * 24 * 60 * 60);

    if ($idioma == "en") {
        $content = "This page is in English";
        $title = "Change the language of the page";
    } else {
        $content = "Esta página está en Castellano (Idioma por defecto)";
        $title = "Cambia el idioma de la página";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="author" content="Jose Masia">
</head>
<body>
    <ul><?= $title ?>
        <li><a href="idioma.php?setLanguage=es">Español</a></li>
        <li><a href="idioma.php?setLanguage=en">Inglés</a></li>
    </ul>
    <?= $content ?>
</body>
</html>
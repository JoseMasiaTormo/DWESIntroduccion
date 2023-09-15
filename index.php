<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jose</title>
</head>
<body>
    <?php
        echo "Hola";
        $parrafo = "Esto es un parrafo";
        $escaped = "Esto contiene \t un caracter tabulador.";
        echo $escaped;
        $unescaped = 'Esto solo contienen una barra y una t: \t';
        echo $unescaped;
    ?>
    <?php 
    
    ?>
    Adios
    <p><?= $parrafo?></p>
</body>
</html>
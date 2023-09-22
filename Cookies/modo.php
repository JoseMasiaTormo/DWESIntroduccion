<?php
    $mode = ($_GET["mode"] ?? ($_COOKIE["mode"] ?? "claro"));
    setcookie("mode", $mode, time() + 30 * 24 * 60 * 60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo oscuro o claro</title>
    <style type="text/css">
        .claro {
            background-color: #eee;
        }
        .oscuro {
            background-color: grey;
        }
    </style>
</head>
<body class="<?= $mode ?>">
    <a href="?mode=claro">Modo claro</a>
    <br/>
    <a href="?mode=oscuro">Modo Oscuro</a>
</body>
</html>
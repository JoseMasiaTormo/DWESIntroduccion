<?php
    require('conexion.php');

    $nombre = ($_GET['nombre'] ?? '');
    $descripcion = ($_GET['descripcion'] ?? '');

    if (!empty($nombre)) {
        $pdoSt = $pdo->prepare("INSERT INTO producto (nombre, descripcion) VALUES (?, ?)");
        $pdoSt->bindParam(1, $nombre);
        $pdoSt->bindParam(2, $descripcion);

        $pdoSt->execute();
    } else {
        echo "El campo nombre está vacío";
    }
?>
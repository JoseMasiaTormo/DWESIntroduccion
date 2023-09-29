<?php
    require('conexion.php');
    $id = ($_GET['id'] ?? '');

    if (!empty($id)) {
        $nombre = $_GET['nombre'] ?? '';
        $descripcion = $_GET['descripcion'] ?? '';

        if (!empty($nombre)) {
            $resultado = $pdo->query("SELECT nombre, descripcion FROM producto WHERE id = $id");
            while ($registro = $resultado->fetch()) {
                echo "El producto de nombre ".$registro['nombre']." con descripcion (".$registro['descripcion'].") a cambiado a: ";
                echo "<br/>";
            }
            $pdoSt = $pdo->prepare("UPDATE producto SET nombre = ?, descripcion = ? WHERE id = ?");
            $pdoSt->bindValue(1, $nombre);
            $pdoSt->bindValue(2, $descripcion);
            $pdoSt->bindValue(3, $id);

            $pdoSt->execute();

            //----//

            $resultado = $pdo->query("SELECT nombre, descripcion FROM producto WHERE id = $id");
            while ($registro = $resultado->fetch()) {
                echo "Producto de nombre ".$registro['nombre'].": ";
                echo $registro['descripcion'].".<br/>";
            }
        } else {
            echo "Introduce un nombre";
        }
    } else {
        echo "Introduce la ID del producto que quieres actualizar";
    }

    $nombre = ($_GET['nombre'] ?? '');
    $descripcion = ($_GET['descripcion'] ?? '');


?>
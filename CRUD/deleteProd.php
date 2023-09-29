<?php  
    require('conexion.php');
    $id = ($_GET['id'] ?? '');

    if (!empty($id)) {
        $resultado = $pdo->query("SELECT nombre, descripcion FROM producto WHERE id = $id");
        while ($registro = $resultado->fetch()) {
            echo "El producto de nombre ".$registro['nombre']." con descripcion (".$registro['descripcion'].") a sido borrado";
            echo "<br/>";
        }
        $pdoSt = $pdo->prepare("DELETE FROM producto WHERE id = ?");
        $pdoSt->bindParam(1, $id);

        $pdoSt->execute();
    } else {
        echo "Introduce la ID del producto que quieres borrar";
    }

    $nombre = ($_GET['nombre'] ?? '');
    $descripcion = ($_GET['descripcion'] ?? '');


?>
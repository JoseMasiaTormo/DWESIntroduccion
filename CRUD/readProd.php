<?php  
    require('conexion.php');
    $id = ($_GET['id'] ?? '');

    if (!empty($id)) {
        $resultado = $pdo->query("SELECT nombre, descripcion FROM producto WHERE id = $id");
        while ($registro = $resultado->fetch()) {
            echo "Producto de nombre ".$registro['nombre'].": ";
            echo $registro['descripcion']."<br/>";
        }
    } else {
        echo "Introduce una ID válida";
    }
?>
<?php  
    $productos = ["1" => "Jamón", "2" => "Queso", "3" => "Yogur"];
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        if (array_key_exists($id, $productos)) {
            $nombreProducto = $productos[$id];
            echo "Producto seleccionado: $nombreProducto";
        } else {
            http_response_code(404);
            echo "<h1>404</h1><hr/><h3>Producto no encontrado</h3>";
        }
    } else {
        echo "Por favor, proporciona un parametro 'id' en el QueryString para buscar un producto.";
    }
?>
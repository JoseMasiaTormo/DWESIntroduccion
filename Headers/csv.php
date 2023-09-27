<?php  
    $productos = ["1" => "Jamón", "2" => "Queso", "3" => "Yogur"];

    $filename = "productos.csv";

    foreach ($productos as $key => $value) {
        echo "$key, $value\n";
    }

    header("Content-Disposition: attachment; filename=$filename");
?>
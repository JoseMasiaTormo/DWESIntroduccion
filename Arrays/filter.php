<?php  
    $contactos = array(
        array("codigo" => 1, "nombre" => "Juan Pérez",
        "telefono" => "966112233", "email" => "juanp@gmail.com"),
        array("codigo" => 2, "nombre" => "Ana López",
        "telefono" => "965667788", "email" => "anita@hotmail.com"),
        array("codigo" => 3, "nombre" => "Mario Montero",
        "telefono" => "965929190", "email" => "mario.mont@gmail.com"),
        array("codigo" => 4, "nombre" => "Laura Martínez",
        "telefono" => "611223344", "email" => "lm2000@gmail.com"),
        array("codigo" => 5, "nombre" => "Nora Jover",
        "telefono" => "638765432", "email" => "norajover@hotmail.com"),
    );

    $dominio = $_GET['dominio'] ?? "";

    if (isset($dominio)) {
        $filtro = array_filter($contactos, 
            function($contacto) use ($dominio) {
                return strpos($contacto['email'], $dominio) !== false;
        });

        if (!empty($filtro)) {
            echo "<h2> Contactos con el dominio $dominio:</h2>";
            echo "<ul>";
            foreach($filtro as $contacto) {
                echo "<li>{$contacto['nombre']} - {$contacto['email']}</li>";
            }
            echo "</ul>";
        } else {
            echo "No se han encontrado contactos con ese dominio";
        }
    }
?>
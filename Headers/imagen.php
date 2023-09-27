<?php  
    $letMeIn = $_GET['letMeIn'] ?? 0 == 1;

    header("Content-Type: image/png");
    if (isset($_GET['letMeIn'])) {
        if($letMeIn == 0) {
            $img = $_GET["img"] ?? "x.png";
            if (file_exists("/home/alumno/Documentos/carpeta-oculta/$img") === true) {
                $img = imagecreatefrompng("/home/alumno/Documentos/carpeta-oculta/$img");
                imagepng($img);
            } else {
                http_response_code(404);
                $img = imagecreatefrompng("/home/alumno/Documentos/carpeta-oculta/404.png");
                imagepng($img);
            }
        } else {
            imagepng(imagecreatefrompng("/home/alumno/Documentos/carpeta-oculta/x.png"));
        }   
    } else {
        http_response_code(401);
        imagepng(imagecreatefrompng("/home/alumno/Documentos/carpeta-oculta/error.png"));
    }
?>
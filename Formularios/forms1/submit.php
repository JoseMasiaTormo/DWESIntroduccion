<?php  
    function filtrado($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nombre"])) {
            $errores[] = "El nombre es requerido";
        }
        if (empty($_POST["email"])) {
            $errores[] = "No se ha indicado email";
        }
        if (!empty($_FILES["imagen"]["name"])) {
            $dirSub = "subidas/";
            //$maxSize = "51200";
            $validExt = array("jpg", "png", "gif");
            if(isset($_POST["submit"]) && isset($_FILES["imagen"])) {
                $filename = $_FILES["imagen"]["name"];
                $filesize = $_FILES["imagen"]["size"];
                $dirTemp = $_FILES["imagen"]["tmp_name"];
                $fileType = $_FILES["imagen"]["type"];
                $arrayFile = pathinfo($filename);
                $ext = $arrayFile["extension"];
                
                if(!in_array($ext, $validExt)) {
                    $errores[] = "La extensión no es valida";
                }
                /*if($filesize > $maxSize) {
                    $errores[] = "La imagen debe tener un tamaño inferior a 50Kb";
                }*/
                $filename = $arrayFile["filename"];
                $filename = preg_replace("/[^A-Z0-9._-]/i", "_", $filename);
                $filename = $filename . rand(1, 100);

                if(empty($errores)) {
                    $fullName = $dirSub.$filename.".".$ext;
                    move_uploaded_file($dirTemp, $fullName);
                    print "El archivo se ha subido correctamente";
                }
            }
        } else {
            $errores[] = "Falta el avatar";
        }
        if (empty($errores)) {
            $nombre = filtrado($_POST["nombre"]);
            $email = filtrado($_POST["email"]);
            $select = $_POST["select"];
        }
    }
?>

<html>
    <body>
        <?php if (empty($errores)): ?>
            <h2>Datos enviados: </h2>
            Nombre: <?= $nombre ?? "" ?> <br>
            Email: <?= $email ?? "" ?> <br>
            Estudios: <?= $select ?? "" ?> <br>
            Archivo: <br><img src="<?= $fullName ?? "" ?>" alt="" style="width:550px;height:288px;">
        <?php else: ?>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li> <?= $error ?> </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </body>
</html>
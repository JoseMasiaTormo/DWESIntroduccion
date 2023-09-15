<?php
    $nombre = $_GET['name'] ?? "Jose";
    $prefijo = $_GET['pref'] ?? "";
    $url = 'http://username:password@hostname:9090/path?arg=value';
    $nombre = trim($nombre, "/");

    $longitud = strlen($nombre);

    $name_mayus = strtoupper($nombre);
    $name_minus = strtolower($nombre);

    $posicion = strpos($nombre, $prefijo);

    $total_letras = substr_count($name_minus, "a");

    $pos_letra = stripos($name_minus, "a");

    $nombre_alt = str_ireplace("o", "0", $nombre);

    $protocolo = parse_url($url, PHP_URL_SCHEME);
    $usuario = parse_url($url, PHP_URL_USER);
    $path = parse_url($url, PHP_URL_PATH);
    $querystr = parse_url($url, PHP_URL_QUERY);


    echo "Tu nombre es $nombre <br/>";
    echo "La longitud de tu nombre es $longitud <br/>";
    echo "Este es tu nombre con todo mayus: $name_mayus <br/>";
    echo "Este es tu nombre con todo minus: $name_minus <br/>";
    
    if (isset($_GET['pref']))
        if ($posicion !== false) {
            echo "El nombre contiene el prefijo $prefijo en la posición $posicion <br/>";
        } else {
            echo "El nombre no contiene el prefijo $prefijo <br/>";
        }
    
    echo "El total de letras a en el nombre $nombre es de $total_letras <br/>";
    
    if ($pos_letra !== false) {
        echo "El nombre contiene la letra a en la posición $pos_letra <br/>";
    } else {
        echo "El nombre $nombre no contiene la letra a <br/>";
    }

    echo "El nombre $nombre sustituyendo todas las o por 0 es $nombre_alt <br/>";

    echo "El protocolo de la url dada es $protocolo <br/>";
    echo "El usuario de la url dada es $usuario <br/>";
    echo "La path de la url dada es $path <br/>";
    echo "La querystring de la url dada es $querystr <br/>";
?>
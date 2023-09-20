<?php
    function partlist($cadena) {
        $result = array();

        for ($i=1; $i < count($cadena); $i++) { 
            $parte1 = implode(" ", array_slice($cadena, 0, $i));
            $parte2 = implode(" ", array_slice($cadena, $i));
            $result[] = array($parte1, $parte2);
        }
        return $result;
    };

    $cadena = array("Seguro", "que", "apruebo", "esta", "asignatura");
    $result = partlist($cadena);

    print_r($result);
?>
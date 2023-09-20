<?php 
    $cadenas = ["Hola", "Adios", "Que tal", "Mi nombre es Jose", "Jose", "18", "Y tal"];

    function calcLong($cadena) {
        return strlen($cadena);
    }

    $longitudes = array_map('calcLong', $cadenas);

    $longMax = max($longitudes);
    $longMin = min($longitudes);

    echo "La longitud maxima es $longMax y la minima $longMin";
?>
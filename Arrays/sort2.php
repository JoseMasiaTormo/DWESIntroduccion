<?php
    $tempsAgosto = "30 25 32 28 27 31 33 26 29 34";

    $tempsAgostoArray = explode(" ", $tempsAgosto);

    $mediaArray = array_sum($tempsAgostoArray) / count($tempsAgostoArray);

    asort($tempsAgostoArray);

    $tempMin = array_slice($tempsAgostoArray, 0, 5);
    $tempMax = array_slice($tempsAgostoArray, -5);

    echo "Las temperaturas dadas son $tempsAgosto </br>";
    echo "La media de las temperaturas es $mediaArray </br>";
    echo "Las temperaturas mínimas son " . implode(", ", $tempMin) . "</br>";
    echo "Las temperaturas máximas son " . implode(", ", $tempMax) . "</br>";
?>
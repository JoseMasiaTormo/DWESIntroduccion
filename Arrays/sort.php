<?php
    $edades = array("Juan"=>"31","Maria"=>"41","Andrés"=>"39","Berta"=>"40");

    //Ordenados por nombre ascendente
    ksort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
    echo "<br/>";

    //Ordenados por edad ascendente
    asort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
    echo "<br/>";

    //Ordenados por nombre descendente
    krsort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
    echo "<br/>";

    //Ordenados por edad descendente
    arsort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
?>
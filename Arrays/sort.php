<?php
    $edades = array("Juan"=>"31","Maria"=>"41","Andrés"=>"39","Berta"=>"40");

    //Ordenados por nombre descendente
    ksort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
    echo "<br/>";

    //Ordenados por edad descendente
    asort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
    echo "<br/>";

    //Ordenados por nombre ascendente
    krsort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
    echo "<br/>";

    //Ordenados por edad ascendente
    arsort($edades);
    foreach($edades as $nombre => $edad) {
        echo "$nombre tiene $edad años </br>";
    };
?>
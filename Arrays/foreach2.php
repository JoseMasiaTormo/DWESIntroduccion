<?php
    $colores = array('blanco'=>'blanco.html', 'verde'=>'verde.html', 'rojo'=>'rojo.html');

    echo "<ul>";
    foreach ($colores as $color => $htmlpag) {
        echo "<li><a href=\"$htmlpag\">" . $color . "</a></li>"; 
    };
    echo "</ul>";
?>
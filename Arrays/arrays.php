<?php
    $nombres = array('Jose', 'Dylan', 'Joan', 'Victor');

    $total_nombres = count($nombres);

    $str_array = implode(" ", $nombres);

    $sort_array = asort($nombres);
    $str_array2 = implode(" ", $nombres);

    $nombres = array('Jose', 'Dylan', 'Joan', 'Victor');
    $array_reverse = array_reverse($nombres);
    $str_array3 = implode(" ", $array_reverse);

    $pos = array_search('Jose', $nombres);

    echo "En el array nombres hay $total_nombres nombres <br/>";
    echo "Los nombres del array son $str_array <br/>";
    echo "El array ordenado sería $str_array2 <br/>";
    echo "El array original al reves es $str_array3 <br/>";
    echo "El nombre Jose se encuentra en la posicion $pos en el array nombres <br/>";

    $alumnos = array([1, 'Jose', 18],[2, 'Dylan', 19],[3, 'Joan', 19]);
?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
    </tr>
    <?php
    for ($i=0; $i < count($alumnos); $i++) { 
        echo "<tr>";
        echo "<td>" . $alumnos[$i][0] . "</td>";
        echo "<td>" . $alumnos[$i][1] . "</td>";
        echo "<td>" . $alumnos[$i][2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
    $array_nombres = array_column($alumnos, 1);
    $str_array4 = implode(" ", $array_nombres);

    $numeros = array(1, 1, 1, 1, 1, 2, 2, 2, 2, 2);
    $suma_nums = array_sum($numeros);

    echo "$str_array4 <br/>";
    echo "La suma de los numeros del array es $suma_nums";
?>
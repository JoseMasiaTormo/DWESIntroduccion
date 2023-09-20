<?php  
    $value = 'Hola esto es una cookie';
    setcookie("DAW", $value, time() + 30 * 24 * 60 * 60);
?>
<?php  
    echo "La cookie tiene el valor de " . ($_COOKIE["DAW"] ?? "NULO");
?>
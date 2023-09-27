<?php  
    $nav = $_SERVER['HTTP_USER_AGENT'];
    $firefox = strpos($nav, 'Firefox');

    if ($firefox == true) {
        echo "Bienvenido a la página en Firefox";
    } else {
        echo "<script>alert('Tu navegador no es compatible con esta página')</script>";
    }
?>
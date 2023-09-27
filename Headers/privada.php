<?php  
    if (isset($_GET['letMeIn'])) {
        $id = $_GET['letMeIn'];

        if ($id == 1) {
            echo "<h2>Bienvenido!</h2>";
        } else if ($id == 0) {
            header('Location: login.php');
        } else {
            echo "<h2>Ese no es un numero válido</h2>";
        }
    } else {
        echo "Por favor introduce un numero en la QueryString";
    }
?>
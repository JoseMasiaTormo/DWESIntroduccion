<?php
    require("conexion.php");
    session_start();

    function filtrado($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    $errores = [];
    if (isset($_POST["submit"])) {
        $usuario = filtrado($_POST["usuario"] ?? "");
        $password = ($_POST["password"] ?? "");
        if (empty($usuario)) {
            $errores[] = "El usuario no puede estar vacío";
        }
        if (empty($password)) {
            $errores[] = "La contraseña no puede estar vacía";
        }
        if (!$errores) {
            $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            $stm = $pdo->prepare($sql);
            $stm->bindParam(1, $usuario);
            $stm->bindParam(2, $password);

            $resultado = $stm->execute();
            $registro = $stm->fetch();
            if ($registro) {
                $_SESSION["username"] = $usuario;
                header("location: privada.php");
            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php  
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    }
    ?>
    <form action="login.php" method="POST">
        Usuario: <input type="text" id="usuario" name="usuario"><br>
        Contraseña: <input type="password" id="password" name="password"><br>
        <input type="submit" id="submit" name="submit" value="Enviar"><br>
        ¿No tienes cuenta? Crea una <a href="register.php">aquí</a>
    </form>
</body>
</html>
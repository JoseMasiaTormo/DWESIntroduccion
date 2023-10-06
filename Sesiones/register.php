<?php  
    require("conexion.php");
    session_start();

    function filtrado($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["usuario"])) {
            $errores[] = "El nombre de usuario es obligatorio";
        }
        if (empty($_POST["password"])) {
            $errores[] = "La contraseña es obligatoria";
        }
        if (empty($_POST["email"])) {
            $errores[] = "El email es obligatorio";
        }
        if (empty($errores)) {
            $username = filtrado($_POST["usuario"] ?? "");
            $password = ($_POST["password" ?? ""]);
            $email = filtrado($_POST["email"] ?? "");

            try {
                $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $stmt->bindParam(1, $username);
                $stmt->bindParam(2, $email);
                $stmt->bindParam(3, $password);

                $stmt->execute();
                header("location: login.php");
            } catch (PDOException $e) {
                echo "Error al insertar los datos";
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
    <form action="register.php" method="POST">
        Usuario: <input type="text" id="usuario" name="usuario"><br>
        Contraseña: <input type="password" id="password" name="password"><br>
        Email: <input type="email" id="email" name="email"><br>
        <input type="submit" id="submit" name="submit" value="Enviar"><br>
    </form>
</body>
</html>
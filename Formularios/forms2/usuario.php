<?php  
    require("conexion.php");

    if (isset($_GET["id"])) {
        $userId = $_GET["id"];

        try {
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");

            $stmt->bindParam(1, $userId);
            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$usuario) {
                echo "No se han encontrado usuarios";
            }
        } catch (PDOException $e) {
            echo "Error al obtener los datos del usuario:" . $e->getMessage();
        }
    } else {
        echo "ID no proporcionada";
    }
?>

<html>
    <body>
        <h2>Datos del usuario: </h2>
        Nombre: <?= $usuario['nombre'] ?> <br>
        Email: <?= $usuario['email'] ?> <br>
        Estudios: <?= $usuario['estudios'] ?> <br>
        Archivo: <br> <img src="<?= $usuario['imagen']?>" alt="" style="width: 550px;height:288px;">
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //Datos de Conexión
    $BD = "cursosql";
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $puerto = 3307;

    $conexion = mysqli_connect($servidor, $usuario, $clave, $BD, 3307);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $connect_error);
    }

    $sql = "SELECT * FROM `usuarios` ";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo '<ol>';
        while ($fila = mysqli_fetch_array($resultado)) {
            echo '<li>';
            ///echo var_dump($fila);
            for ($i = 0; $i < 5; $i++) {
                if (strcmp('', $fila[$i]) != 0)
                    echo '<label>' . $fila[$i] . ',</label>';
            }
            echo '</li>';
        }
        echo '</ol>';
    }

    $conexion->close();
    ?>
    <button type="submit" class="miBtn" onclick="location.href='index.php'">VOLVER</button>
</body>

</html>
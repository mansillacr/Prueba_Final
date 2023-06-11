<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO CARMEN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="tarjeta">
        <div class="miFormulario">
            <form action="" method="post">
                <h1>FORMULARIO</h1>
                <!-- <form> -->
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div>
                    <label for="primerapellido">Primer Apellido</label>
                    <input type="text" id="primerapellido" name="primer_apellido">
                </div>
                <div>
                    <label for="segundoapellido">Segundo Apellido</label>
                    <input type="text" id="segundoapellido" name="segundo_apellido">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" pattern="^[a-zA-Z0-9.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" required>
                </div>
                <div>
                    <label for="login">Login</label>
                    <input type="text" id="pass" name="login">
                </div>
                <div>
                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass" name="pass" pattern="^[0-9]{4,8}" required>
                </div>
                <div>
                    <input type="submit" value="ENVIAR" id="btn" class="miBtn">
                </div>
                <!-- </form> -->

                <?php
                $flag = false;
                if ($_POST) {
                    $nombre = $_POST['nombre'];
                    $apellido1 = $_POST['primer_apellido'];
                    $apellido2 = $_POST['segundo_apellido'];
                    $email = $_POST['email'];
                    $login = $_POST['login'];
                    $pass = $_POST['pass'];

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

                    $sql = "SELECT `email` FROM `usuarios` WHERE `email` = '$email'";
                    $resultado = $conexion->query($sql);

                    if ($resultado->num_rows > 0) {
                        echo "<label>El email ya esta en la base de datos</label>";
                    } else {
                        $sql = "INSERT INTO `usuarios`(`nombre`, `apellido1`, `apellido2`, `email`, `login`, `pass`) VALUES ('$nombre','$apellido1','$apellido2','$email','$login','$pass')";

                        if ($conexion->query($sql) == TRUE) {
                            $flag = true;
                            echo "<label>Registrado con éxito</label>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conexion->error;
                        }
                    }
                }
                ?>
            </form>
            <div>
                <?php
                if ($flag) {
                    echo '<button type="submit" class="miBtn" onclick="location.href=`consultas.php`">CONSULTAR</button>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
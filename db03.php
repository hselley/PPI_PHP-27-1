<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro completado</title>
</head>
<body>
    <h1>Registro completado</h1>

    <?php
        $con = mysqli_connect("db", "usuario", "123456", "noBaseDatos");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
        $apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
        $edad = mysqli_real_escape_string($con, $_POST["edad"]);
        $correo = mysqli_real_escape_string($con, $_POST["correo"]);

        $sql = "INSERT INTO personas (nombre, apellido, edad, correo) 
            VALUES ('$nombre', '$apellido', '$edad', '$correo');";

        if(!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        } else {
            echo "<p>Se ha registrado correctamente.</p>";
        }
        
        mysqli_close($con);
    ?>

    <p><a href="db02.php">Regresar al formulario</a></p>
    <p><a href="db04.php">Ver usuarios registrados</a></p>
</body>
</html>
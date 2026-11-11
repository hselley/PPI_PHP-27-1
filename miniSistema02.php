<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konectem0s</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="miniSistema01.html">Registro</a>
            </li>
            <li class="nav-item">
                <a   class="nav-link" href="miniSistema03.html">Consulta</a>
            </li>
            </ul>
        </div>
        </nav>
        <?php
            $con = mysqli_connect("db", "usuario", "123456", "registro");

            if (mysqli_connect_errno()) {
                echo "<p>Falló la conexión con MySQL: " . mysqli_connect_error() . "</p>";
            }

            $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
            $apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
            $edad = mysqli_real_escape_string($con, $_POST["edad"]);
            $correo = mysqli_real_escape_string($con, $_POST["correo"]);
            $contrasena = mysqli_real_escape_string($con, $_POST["contrasena"]);
            $contraCifrada = password_hash($contrasena, PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (nombre, apellido, edad, correo, contrasena) 
                VALUES ('$nombre', '$apellido', '$edad', '$correo', '$contraCifrada');";

            if(!mysqli_query($con, $sql)) {
                die('Error: ' . mysqli_error($con));
            } else {
                echo "<p>Se ha registrado correctamente.</p>";
            }
            
            mysqli_close($con);
        ?>
        
    </div>
</body>
</html>
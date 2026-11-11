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
                <a class="nav-link" href="miniSistema04.html">Iniciar sesión</a>
            </li>    
            <li class="nav-item">
                <a class="nav-link" href="miniSistema01.html">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="miniSistema03.php">Consulta</a>
            </li>
            </ul>
        </div>
        </nav>

        <h1 class="m-5">Inicio de sesión</h1>

        <?php
            $con = mysqli_connect("db", "usuario", "123456", "registro");

            if (mysqli_connect_errno()) {
                echo "<p>Falló la conexión con MySQL: " . mysqli_connect_error() . "</p>";
            }

            $correo = mysqli_real_escape_string($con, $_POST["correo"]);
            $contrasena = mysqli_real_escape_string($con, $_POST["contrasena"]);

            $sql = "SELECT * FROM usuarios WHERE correo='$correo';";
            $resultado = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($resultado);
            $hash = $row['contrasena'];

            if(password_verify($contrasena, $hash)) {
                echo "<p>Inicio de sesión exitoso</p>";
            } else {
                echo "<p>Contraseña con capacidades alternativas</p>";
            }
            
            mysqli_close($con);            
        ?>       
    </div>
</body>
</html>
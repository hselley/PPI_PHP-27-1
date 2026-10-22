<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido al mundo PHP</h1>
    <p>Bienvenido <?php echo $_GET["name"]; ?></p>
    <p>Su correo es: <?php echo $_GET["email"]; ?> </p>
    <p>Su contraseña es: <?php echo $_GET["passwd"]; ?> </p>
    <p><a href="php03.html">Regresar</a></p>
</body>
</html>
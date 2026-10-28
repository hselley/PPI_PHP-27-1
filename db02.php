<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuarios</h1>
    <form action="db03.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido"> <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad"> <br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo"> <br>
        <input type="submit" value="Registrar">
    </form>
    <p><a href="db04.php">Ver usuarios registrados</a></p>
</body>
</html>
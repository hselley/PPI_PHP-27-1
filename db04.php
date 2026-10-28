<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
</head>
<body>
    <h1>Usuarios registrados</h1>
    <table border='1'>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Correo</th>
        </tr>
        <?php
            $con = mysqli_connect("db", "usuario", "123456", "noBaseDatos");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "SELECT * FROM personas;";
            $resultado = mysqli_query($con, $sql);

            while($row = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['edad'] . "</td>";
                echo "<td>" . $row['correo'] . "</td>";
                echo "</tr>";
            }

            mysqli_close($con);
        ?>
    </table>
    <p><a href="db02.php">Regresar al registro</a></p>
</body>
</html>
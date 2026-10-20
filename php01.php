<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer PHP</title>
</head>
<body>
    <h1>Mi primer PHP</h1>
    <p>Esto es HTML</p>
    <?php 
        echo "<p>Hola mundo cruel.</p>";
        echo "<p>Esto es HTML desde PHP</p>";

        $cars=array("Volvo","BMW","Toyota");
        var_dump($cars);   

        $x=2;
        print(++$x);
        print($x);
    ?>
</body>
</html>
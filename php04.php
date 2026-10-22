<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial en PHP</title>
    <style>
        /* Estilos CSS integrados */
        :root {
            --primary-color: #4a90e2;
            --primary-hover: #357abd;
            --bg-color: #f4f7f6;
            --card-bg: #ffffff;
            --text-color: #333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: var(--card-bg);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 2rem;
        }

        p {
            margin-bottom: 25px;
            color: #666;
            line-height: 1.5;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: stretch;
        }

        label {
            text-align: left;
            font-weight: 600;
            margin-bottom: -10px;
            color: #444;
        }

        input[type="number"] {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="number"]:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        input[type="submit"] {
            background-color: var(--primary-color);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s;
        }

        input[type="submit"]:hover {
            background-color: var(--primary-hover);
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        /* Estilo para el resultado */
        p.resultado {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px dashed #ccc;
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        /* Responsive para pantallas más pequeñas */
        @media (max-width: 480px) {
            .container {
                padding: 25px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Factorial en PHP</h1>
        <p>Ingrese un número positivo para calcular su factorial.</p>
        
        <form action="" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" required min='0' value="<?php if(isset($_GET["numero"])) echo htmlspecialchars($_GET["numero"]); ?>">
            <input type="submit" value="Calcular">
        </form>

        <?php
        // Verifica si el método de solicitud es GET y si el campo "numero" está establecido
        if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["numero"])) {
            $n = intval($_GET["numero"]);
            
            // Función para calcular el factorial
            function factorial($n) {
                if($n==1 || $n==0) {
                    return(1);
                } else {
                    return($n * factorial($n-1));
                }
            }
            
            // Muestra el resultado dentro de un párrafo con una clase CSS específica
            echo "<p class='resultado'>El factorial de " . $n . " es: " . factorial($n) . "</p>";
        }
        ?>
    </div>

</body>
</html>

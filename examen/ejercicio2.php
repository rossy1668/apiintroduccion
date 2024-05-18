<!DOCTYPE html>
<html>

<head>
    <title>Evaluación de Función Matemática</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        h2 {
            color: #333;
        }

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .result p {
            margin: 0;
        }
    </style>
</head>

<body>
    <h2>Evaluación de Función Matemática</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="y1">Valor de y1:</label>
        <input type="number" name="y1" id="y1" required>
        <br>
        <input type="submit" value="Evaluar Función">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $y1 = $_POST["y1"];
        $resultado = 0;

        if (0 < $y1 && $y1 <= 11) {
            $resultado = 3 * $y1 + 36;
        } elseif (11 < $y1 && $y1 <= 33) {
            $resultado = $y1 ** 2 - 10;
        } elseif (33 < $y1 && $y1 <= 64) {
            $resultado = $y1 ** 3 + $y1 ** 2 - 1;
        }

        echo "<div class='result'>";
        echo "<p>El resultado de evaluar la función para y1 = $y1 es: $resultado</p>";
        echo "</div>";
    }
    ?>
</body>

</html>

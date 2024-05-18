<!DOCTYPE html>
<html>

<head>
    <title>Nota Promedio Lenguaje de Programación IV</title>
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

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .buttons input {
            padding: 10px 20px;
            font-size: 16px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <h2>Nota Promedio Lenguaje de Programación IV</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
        $num_alumnos = 30;
        for ($i = 1; $i <= $num_alumnos; $i++) {
            echo "<label for='nota$i'>Nota del Alumno $i:</label>";
            echo "<input type='number' name='nota$i' id='nota$i' min='0' max='20' step='0.1' required>";
            echo "<br>";
        }
        ?>
        <input type="submit" value="Calcular Promedio">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $suma = 0;

        for ($i = 1; $i <= $num_alumnos; $i++) {
            $nota = $_POST["nota$i"];
            $suma += $nota;
        }

        $promedio = $suma / $num_alumnos;

        echo "<div class='result'>";
        echo "<p>El promedio de notas del curso Lenguaje de Programación IV es: $promedio</p>";
        echo "</div>";
    }
    ?>
</body>

</html>

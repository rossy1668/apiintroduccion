<!DOCTYPE html>
<html>

<head>
    <title>Calificación de Notas</title>
    <style>
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 20px;
        }

        h2 {
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #333;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="button"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #45a049;
        }

        .result {
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h2>Calificación de Notas</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nota">Ingrese la Nota:</label>
        <input type="number" name="nota" id="nota" min="0" max="20" required>
        <br><br>
        <input type="submit" value="Calcular Calificación">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota = $_POST["nota"];

        // Determinar la calificación según la nota
        $calificacion = "";
        if ($nota >= 0 && $nota <= 10) {
            $calificacion = "Deficiente";
        } elseif ($nota >= 11 && $nota <= 14) {
            $calificacion = "Regular";
        } elseif ($nota >= 15 && $nota <= 18) {
            $calificacion = "Bueno";
        } elseif ($nota >= 19 && $nota <= 20) {
            $calificacion = "Excelente";
        } else {
            $calificacion = "Nota fuera de rango";
        }

        // Mostrar la calificación
        echo "<div class='result'>";
        echo "<p>La calificación de la nota $nota es: $calificacion</p>";
        echo "</div>";

        // Botones Nuevo y Salir
        echo "<input type='button' value='Nuevo' onclick='window.location.reload();'>";
        echo "<input type='button' value='Salir' onclick='window.close();'>";
    }
    ?>
</body>

</html>

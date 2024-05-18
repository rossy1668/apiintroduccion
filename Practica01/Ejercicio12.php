<!DOCTYPE html>
<html>

<head>
    <title>Evaluación de Curso</title>
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
    <h2>Evaluación de Curso</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="practica1">Nota Práctica 1:</label>
        <input type="number" name="practica1" id="practica1" min="0" max="20" required>
        <br>
        <label for="practica2">Nota Práctica 2:</label>
        <input type="number" name="practica2" id="practica2" min="0" max="20" required>
        <br>
        <label for="practica3">Nota Práctica 3:</label>
        <input type="number" name="practica3" id="practica3" min="0" max="20" required>
        <br>
        <label for="practica4">Nota Práctica 4:</label>
        <input type="number" name="practica4" id="practica4" min="0" max="20" required>
        <br><br>
        <input type="submit" value="Calcular Promedio">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $practica1 = $_POST["practica1"];
        $practica2 = $_POST["practica2"];
        $practica3 = $_POST["practica3"];
        $practica4 = $_POST["practica4"];

        // Eliminar la nota menor
        $min_nota = min($practica1, $practica2, $practica3, $practica4);

        // Calcular el promedio de las tres notas restantes
        $promedio = ($practica1 + $practica2 + $practica3 + $practica4 - $min_nota) / 3;

        // Determinar si el alumno aprobó o desaprobó
        $mensaje = $promedio >= 10 ? "Aprobado" : "Desaprobado";

        // Mostrar el resultado
        echo "<div class='result'>";
        echo "<p>Promedio: $promedio</p>";
        echo "<p>$mensaje</p>";
        echo "</div>";

        // Botones Nuevo y Salir
        echo "<input type='button' value='Nuevo' onclick='window.location.reload();'>";
        echo "<input type='button' value='Salir' onclick='window.close();'>";
    }
    ?>
</body>

</html>

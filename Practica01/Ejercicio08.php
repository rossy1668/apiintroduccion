<!DOCTYPE html>
<html>

<head>
    <title>Número de Días en un Mes</title>
    <style>
        body {
            background-color: #00aae4;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 20px;
        }

        h2 {
            color: #fff;
        }

        input[type="number"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            background-color: #007cbf;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .buttons input {
            padding: 10px 20px;
            font-size: 18px;
            margin-right: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .buttons input:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Número de Días en un Mes</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="mes">Mes:</label>
        <input type="number" name="mes" id="mes" min="1" max="12" required>
        <br>
        <label for="anio">Año:</label>
        <input type="number" name="anio" id="anio" min="1" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes = $_POST["mes"];
        $anio = $_POST["anio"];

        // Calcula el número de días en el mes
        $dias_en_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

        echo "<div class='result'>";
        echo "Mes: $mes<br>";
        echo "Año: $anio<br>";
        echo "El mes $mes del año $anio tiene $dias_en_mes días.";
        echo "</div>";

        // Botones de Nuevo y Salir
        echo "<div class='buttons'>";
        echo "<input type='button' value='Nuevo' onclick='window.location.href=\"" . $_SERVER['PHP_SELF'] . "\"'>";
        echo "<input type='button' value='Salir' onclick='window.close()'>";
        echo "</div>";
    }
    ?>
</body>

</html>

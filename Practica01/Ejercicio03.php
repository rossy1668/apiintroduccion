<!DOCTYPE html>
<html>

<head>
    <title>Cálculo de Sueldo Neto</title>
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

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 2px solid #fff;
            border-radius: 10px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #fff;
        }

        th {
            background-color: #007cbf;
        }

        td {
            background-color: #33a6cc;
        }

        input[type="text"],
        input[type="number"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #fff;
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
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
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
        }
    </style>
</head>

<body>
    <h2>Cálculo de Sueldo Neto</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre del Trabajador:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="horas">Horas Trabajadas:</label>
        <input type="number" name="horas" id="horas" min="1" required>
        <br>
        <label for="tarifa">Tarifa Horaria:</label>
        <input type="number" name="tarifa" id="tarifa" min="1" required>
        <br><br>
        <input type="submit" value="Calcular Sueldo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $horas_trabajadas = $_POST["horas"];
        $tarifa_horaria = $_POST["tarifa"];

        $sueldo_bruto = 0;

        if ($horas_trabajadas <= 56) {
            $sueldo_bruto = $horas_trabajadas * $tarifa_horaria;
        } else {
            $sueldo_bruto = (56 * $tarifa_horaria) + (($horas_trabajadas - 56) * $tarifa_horaria * 1.18);
        }

        $descuento = 0;

        if ($sueldo_bruto > 1200) {
            $descuento = $sueldo_bruto * 0.15;
        }

        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "<div class='result'>";
        echo "<table>";
        echo "<tr><th colspan='2'>Resultados</th></tr>";
        echo "<tr><td>Nombre del Trabajador:</td><td>$nombre</td></tr>";
        echo "<tr><td>Sueldo Bruto:</td><td>S/ " . number_format($sueldo_bruto, 2) . "</td></tr>";
        echo "<tr><td>Descuento:</td><td>S/ " . number_format($descuento, 2) . "</td></tr>";
        echo "<tr><td>Sueldo Neto:</td><td>S/ " . number_format($sueldo_neto, 2) . "</td></tr>";
        echo "</table>";
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

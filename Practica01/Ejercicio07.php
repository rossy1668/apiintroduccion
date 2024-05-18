<!DOCTYPE html>
<html>

<head>
    <title>Pago de Llamada Telefónica</title>
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

        .container {
            background-color: #ddd;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: 20px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #bbb;
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
    <div class="container">
        <h2>Pago de Llamada Telefónica</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="numero">Número Telefónico:</label>
            <input type="text" name="numero" id="numero" required>
            <br>
            <label for="duracion">Duración de la Llamada (minutos):</label>
            <input type="number" name="duracion" id="duracion" min="1" required>
            <br><br>
            <input type="submit" value="Calcular Pago">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero_telefonico = $_POST["numero"];
            $duracion_llamada = $_POST["duracion"];
            $tarifa_inicial = 0.50;
            $tarifa_adicional = 0.80;
            $pago_total = 0;

            if ($duracion_llamada <= 3) {
                $pago_total = $tarifa_inicial;
            } else {
                $pago_total = $tarifa_inicial + ($tarifa_adicional * ($duracion_llamada - 3));
            }

            echo "<table>";
            echo "<tr><th colspan='2'>Detalle del Pago</th></tr>";
            echo "<tr><td>Número Telefónico:</td><td>$numero_telefonico</td></tr>";
            echo "<tr><td>Duración de la Llamada:</td><td>$duracion_llamada minutos</td></tr>";
            echo "<tr><td>Tarifa por Llamada:</td><td>S/ " . number_format($pago_total, 2) . "</td></tr>";
            echo "</table>";

            // Botones de Nuevo y Salir
            echo "<div class='buttons'>";
            echo "<input type='button' value='Nuevo' onclick='window.location.href=\"" . $_SERVER['PHP_SELF'] . "\"'>";
            echo "<input type='button' value='Salir' onclick='window.close()'>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>

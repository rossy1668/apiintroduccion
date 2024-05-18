<!DOCTYPE html>
<html>

<head>
    <title>Compra de Jabones al por Mayor</title>
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
            width: 60%;
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

        .result {
            background-color: #eee;
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
    <div class="container">
        <h2>Compra de Jabones al por Mayor</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="precio">Precio por Jabón:</label>
            <input type="number" name="precio" id="precio" min="0.01" step="0.01" required>
            <br>
            <label for="cantidad">Número de Jabones Solicitados:</label>
            <input type="number" name="cantidad" id="cantidad" min="1" required>
            <br><br>
            <input type="submit" value="Calcular Monto Total">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $precio_jabon = $_POST["precio"];
            $cantidad_jabones = $_POST["cantidad"];

            $descuento = 0;
            $jabones_obsequio = 0;

            if ($cantidad_jabones > 50) {
                // Calcula el descuento del 15%
                $descuento = $precio_jabon * $cantidad_jabones * 0.15;

                // Calcula el número de jabones de obsequio por cada 10 jabones en exceso sobre los 50
                $jabones_en_exceso = $cantidad_jabones - 50;
                $jabones_obsequio = floor($jabones_en_exceso / 10);
            }

            // Calcula el monto total a pagar
            $monto_total = ($precio_jabon * $cantidad_jabones) - $descuento;

            echo "<div class='result'>";
            echo "<table>";
            echo "<tr><th colspan='2'>Resumen de la Compra</th></tr>";
            echo "<tr><td>Precio por Jabón:</td><td>S/ " . number_format($precio_jabon, 2) . "</td></tr>";
            echo "<tr><td>Número de Jabones Solicitados:</td><td>$cantidad_jabones</td></tr>";
            echo "<tr><td>Descuento:</td><td>S/ " . number_format($descuento, 2) . "</td></tr>";
            echo "<tr><td>Jabones de Obsequio:</td><td>$jabones_obsequio</td></tr>";
            echo "<tr><td>Monto Total a Pagar:</td><td>S/ " . number_format($monto_total, 2) . "</td></tr>";
            echo "</table>";
            echo "</div>";

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

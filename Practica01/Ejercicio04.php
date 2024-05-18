<!DOCTYPE html>
<html>

<head>
    <title>Costo Neto del Terreno</title>
    <style>
        body {
            background-color: #00aae4;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #ddd;
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
    <h2>Costo Neto del Terreno</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="largo">Largo del Terreno (metros):</label>
        <input type="number" name="largo" id="largo" min="1" required>
        <br>
        <label for="ancho">Ancho del Terreno (metros):</label>
        <input type="number" name="ancho" id="ancho" min="1" required>
        <br>
        <label for="precio">Precio por Metro Cuadrado:</label>
        <input type="number" name="precio" id="precio" min="1" required>
        <br><br>
        <input type="submit" value="Calcular Costo Neto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largo = $_POST["largo"];
        $ancho = $_POST["ancho"];
        $precio_metro_cuadrado = $_POST["precio"];

        $area = $largo * $ancho;
        $costo_bruto = $area * $precio_metro_cuadrado;
        $descuento = 0;

        switch (true) {
            case $area > 2000:
                $descuento = $costo_bruto * 0.15;
                break;
            case $area > 1000:
                $descuento = $costo_bruto * 0.10;
                break;
            case $area > 500:
                $descuento = $costo_bruto * 0.05;
                break;
            default:
                $descuento = 0;
        }

        $costo_neto = $costo_bruto - $descuento;

        echo "<div class='result'>";
        echo "<table>";
        echo "<tr><th colspan='2'>Resultados</th></tr>";
        echo "<tr><td>Área del Terreno (metros cuadrados):</td><td>$area</td></tr>";
        echo "<tr><td>Costo Bruto del Terreno:</td><td>S/ " . number_format($costo_bruto, 2) . "</td></tr>";
        echo "<tr><td>Descuento:</td><td>S/ " . number_format($descuento, 2) . "</td></tr>";
        echo "<tr><td>Costo Neto del Terreno:</td><td>S/ " . number_format($costo_neto, 2) . "</td></tr>";
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

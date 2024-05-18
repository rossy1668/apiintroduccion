<!DOCTYPE html>
<html>

<head>
    <title>Facturación Hotel Turístico</title>
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
    <h2>Facturación Hotel Turístico</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="habitacion">Tipo de Habitación:</label>
        <select name="habitacion" id="habitacion">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br>
        <label for="dias">Número de Días de Hospedaje:</label>
        <input type="number" name="dias" id="dias" min="1" required>
        <br><br>
        <input type="submit" value="Calcular Factura">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $habitacion = $_POST["habitacion"];
        $dias = $_POST["dias"];

        $costo_por_dia = 0;

        switch ($habitacion) {
            case 'A':
                $costo_por_dia = 95.00;
                break;
            case 'B':
                $costo_por_dia = 45.00;
                break;
            case 'C':
                $costo_por_dia = 35.00;
                break;
            case 'D':
                $costo_por_dia = 27.00;
                break;
            default:
                $costo_por_dia = 0;
                break;
        }

        $monto_total = $costo_por_dia * $dias;
        $descuento = 0;

        // Calcula el descuento si el cliente estuvo alojado más de 5 días
        $dias_minimos_descuento = 5;
        $contador_dias = 0;
        
        while ($contador_dias < $dias) {
            $contador_dias++;
        }
        
        if ($contador_dias > $dias_minimos_descuento) {
            $descuento = $monto_total * 0.15;
        }

        $monto_a_pagar = $monto_total - $descuento;

        echo "<div class='result'>";
        echo "<table>";
        echo "<tr><th colspan='2'>Factura</th></tr>";
        echo "<tr><td>Tipo de Habitación:</td><td>$habitacion</td></tr>";
        echo "<tr><td>Número de Días de Hospedaje:</td><td>$dias</td></tr>";
        echo "<tr><td>Costo por Día:</td><td>S/ " . number_format($costo_por_dia, 2) . "</td></tr>";
        echo "<tr><td>Monto Total:</td><td>S/ " . number_format($monto_total, 2) . "</td></tr>";
        echo "<tr><td>Descuento:</td><td>S/ " . number_format($descuento, 2) . "</td></tr>";
        echo "<tr><td>Monto a Pagar:</td><td>S/ " . number_format($monto_a_pagar, 2) . "</td></tr>";
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

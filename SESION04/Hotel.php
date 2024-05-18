<!DOCTYPE html>
<html>

<head>
    <title>Facturación Hotel Turístico</title>
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

        input[type="text"],
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
    <h2>Facturación Hotel Turístico</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="habitacion">Tipo de Habitación:</label>
        <select name="habitacion" id="habitacion" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br>
        <label for="dias">Número de Días de Hospedaje:</label>
        <input type="number" name="dias" id="dias" min="1" required>
        <br>
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
        }

        $monto_total = $costo_por_dia * $dias;
        $descuento = 0;

        // Calcular el descuento si el cliente estuvo alojado más de 5 días
        if ($dias > 5) {
            $descuento = $monto_total * 0.15;
        }

        $monto_a_pagar = $monto_total - $descuento;

        echo "<div class='result'>";
        echo "<p>Monto del Descuento: S./" . number_format($descuento, 2) . "</p>";
        echo "<p>Monto a Pagar: S./" . number_format($monto_a_pagar, 2) . "</p>";
        echo "</div>";
    }
    ?>
</body>

</html>

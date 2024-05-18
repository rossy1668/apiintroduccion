<!DOCTYPE html>
<html>

<head>
    <title>Compra de Productos</title>
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
    <h2>Compra de Productos</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="codigo">Código del Producto:</label>
        <select name="codigo" id="codigo" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br>
        <label for="calidad">Calidad del Producto:</label>
        <select name="calidad" id="calidad" required>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="C3">C3</option>
        </select>
        <br>
        <label for="unidades">Unidades de Compra:</label>
        <input type="number" name="unidades" id="unidades" min="1" required>
        <br><br>
        <input type="submit" value="Calcular Compra">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = $_POST["codigo"];
        $calidad = $_POST["calidad"];
        $unidades = $_POST["unidades"];

        // Definir los costos de los productos según la calidad
        $costos = array(
            "A" => array("C1" => 45.0, "C2" => 42.0, "C3" => 40.0),
            "B" => array("C1" => 56.0, "C2" => 52.0, "C3" => 51.0),
            "C" => array("C1" => 68.0, "C2" => 66.0, "C3" => 62.0),
            "D" => array("C1" => 75.0, "C2" => 73.0, "C3" => 70.0)
        );

        // Obtener el costo del producto según el código y la calidad
        $costo = $costos[$codigo][$calidad];

        // Calcular el monto total de la compra
        $monto_total = $costo * $unidades;

        // Aplicar el descuento del 12% si el monto total supera s/1000
        $descuento = 0;
        if ($monto_total > 1000) {
            $descuento = $monto_total * 0.12;
        }

        // Calcular el monto a pagar
        $monto_a_pagar = $monto_total - $descuento;

        // Mostrar los resultados
        echo "<div class='result'>";
        echo "<p>Monto Total de la Compra: S/ " . number_format($monto_total, 2) . "</p>";
        echo "<p>Monto del Descuento: S/ " . number_format($descuento, 2) . "</p>";
        echo "<p>Monto a Pagar: S/ " . number_format($monto_a_pagar, 2) . "</p>";
        echo "</div>";

        // Botones Nuevo y Salir
        echo "<input type='button' value='Nuevo' onclick='window.location.reload();'>";
        echo "<input type='button' value='Salir' onclick='window.close();'>";
    }
    ?>
</body>

</html>

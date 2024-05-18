<!DOCTYPE html>
<html>

<head>
    <title>Valor Final del Vehículo</title>
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

        select,
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
    <h2>Valor Final del Vehículo</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="marca">Marca del Vehículo:</label>
        <select name="marca" id="marca" required>
            <option value="toyota">Toyota</option>
            <option value="ford">Ford</option>
            <option value="datsun">Datsun</option>
            <option value="volvo">Volvo</option>
        </select>
        <br>
        <label for="precio">Precio del Vehículo:</label>
        <input type="number" name="precio" id="precio" min="1" required>
        <br><br>
        <input type="submit" value="Calcular Valor Final">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marca = $_POST["marca"];
        $precio = $_POST["precio"];

        // Aplica el descuento según la marca
        $descuento = 0;
        switch ($marca) {
            case 'toyota':
                $descuento = 0.10;
                break;
            case 'ford':
                $descuento = 0.15;
                break;
            case 'datsun':
                $descuento = 0.20;
                break;
            case 'volvo':
                $descuento = 0.25;
                break;
            default:
                $descuento = 0;
                break;
        }

        // Calcula el valor final
        $valor_final = $precio * (1 - $descuento);

        echo "<div class='result'>";
        echo "<p>Marca del Vehículo: $marca</p>";
        echo "<p>Precio del Vehículo: $precio</p>";
        echo "<p>Descuento: " . ($descuento * 100) . "%</p>";
        echo "<p>Valor Final a Pagar: $valor_final</p>";
        echo "</div>";

        // Botones de Nuevo y Salir
        echo "<input type='button' value='Nuevo' onclick='window.location.href=\"" . $_SERVER['PHP_SELF'] . "\"'>";
        echo "<input type='button' value='Salir' onclick='window.close()'>";
    }
    ?>
</body>

</html>

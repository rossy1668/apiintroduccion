<!DOCTYPE html>
<html>

<head>
    <title>Descuento en Compras</title>
    <style>
        body {
            background-color: #4CAF50;
            color: #000;
            font-family: Arial, sans-serif;
            font-size: 20px;
        }

        h2 {
            color: #333;
        }

        .container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="button"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
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

        h3 {
            margin-top: 20px;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Descuento en Compras</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="codigo">Código del Artículo:</label>
            <input type="text" name="codigo" id="codigo" required>
            <br><br>
            <label for="cantidad">Cantidad Comprada:</label>
            <input type="number" name="cantidad" id="cantidad" required>
            <br><br>
            <label for="precio_unitario">Precio Unitario:</label>
            <input type="number" name="precio_unitario" id="precio_unitario" step="0.01" required>
            <br><br>
            <input type="submit" value="Calcular Descuento">
            <input type="button" value="Nuevo" onclick="window.location.reload();">
            <input type="button" value="Salir" onclick="window.close();">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigo = $_POST["codigo"];
            $cantidad = $_POST["cantidad"];
            $precio_unitario = $_POST["precio_unitario"];

            $importe_total = $cantidad * $precio_unitario;
            $descuento = 0;

            if ($cantidad > 100) {
                $descuento = $importe_total * 0.40;
            } elseif ($cantidad >= 25 && $cantidad <= 100) {
                $descuento = $importe_total * 0.20;
            } elseif ($cantidad >= 10 && $cantidad <= 24) {
                $descuento = $importe_total * 0.10;
            }

            $importe_a_pagar = $importe_total - $descuento;

            echo "<h3>Resultados:</h3>";
            echo "<p>Importe Total: $" . number_format($importe_total, 2) . "</p>";
            echo "<p>Descuento: $" . number_format($descuento, 2) . "</p>";
            echo "<p>Importe a Pagar: $" . number_format($importe_a_pagar, 2) . "</p>";
        }
        ?>
    </div>
</body>

</html>

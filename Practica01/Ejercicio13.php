<!DOCTYPE html>
<html>

<head>
    <title>Venta de Libros</title>
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
    <h2>Venta de Libros</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre del Cliente:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="tipo_cliente">Tipo de Cliente:</label>
        <select name="tipo_cliente" id="tipo_cliente">
            <option value="1">Tipo 1</option>
            <option value="2">Tipo 2</option>
            <option value="3">Tipo 3</option>
        </select>
        <br>
        <label for="cantidad_libros">Cantidad de Libros:</label>
        <input type="number" name="cantidad_libros" id="cantidad_libros" min="1" required>
        <br>
        <label for="costo_libro">Costo por Libro:</label>
        <input type="number" name="costo_libro" id="costo_libro" min="1" required>
        <br><br>
        <input type="submit" value="Calcular Pago">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $tipo_cliente = $_POST["tipo_cliente"];
        $cantidad_libros = $_POST["cantidad_libros"];
        $costo_libro = $_POST["costo_libro"];

        // Calcular el total a pagar
        $total_a_pagar = $cantidad_libros * $costo_libro;

        // Calcular el descuento según el tipo de cliente
        $descuento = 0;
        switch ($tipo_cliente) {
            case '1':
                $descuento = $total_a_pagar * 0.30;
                break;
            case '2':
                $descuento = $total_a_pagar * 0.20;
                break;
            case '3':
                $descuento = $total_a_pagar * 0.10;
                break;
            default:
                break;
        }

        // Calcular el neto a pagar
        $neto_a_pagar = $total_a_pagar - $descuento;

        // Mostrar los resultados
        echo "<div class='result'>";
        echo "<p>Total a Pagar: S/ " . number_format($total_a_pagar, 2) . "</p>";
        echo "<p>Descuento: S/ " . number_format($descuento, 2) . "</p>";
        echo "<p>Neto a Pagar: S/ " . number_format($neto_a_pagar, 2) . "</p>";
        echo "</div>";

        // Botones Nuevo y Salir
        echo "<input type='button' value='Nuevo' onclick='window.location.reload();'>";
        echo "<input type='button' value='Salir' onclick='window.close();'>";
    }
    ?>
</body>

</html>

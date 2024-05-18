<!DOCTYPE html>
<html>
<head>
    <title>Descuento de Libros</title>
</head>
<body>
    <h2>Descuento de Libros</h2>
    <?php
    // Variables para almacenar los valores ingresados
    $nombre = "";
    $tipo_cliente = "";
    $cantidad_libros = "";
    $costo_por_libro = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Si se ha enviado el formulario, se almacenan los valores ingresados
        $nombre = $_POST["nombre"];
        $tipo_cliente = $_POST["tipo_cliente"];
        $cantidad_libros = $_POST["cantidad_libros"];
        $costo_por_libro = $_POST["costo_por_libro"];

        // Limpiar los datos ingresados si se presiona el botón "Nuevo"
        if (isset($_POST["btnNuevo"])) {
            $nombre = "";
            $tipo_cliente = "";
            $cantidad_libros = "";
            $costo_por_libro = "";
        }
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table width="408" border="10" bgcolor="#87CEEB">
            <tr>
                <td colspan="2"><strong>DATOS DE COMPRA</strong> </td>
            </tr>
            <tr>
                <td>Nombre del Cliente:</td>
                <td>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tipo de Cliente:</td>
                <td>
                    <select name="tipo_cliente" id="tipo_cliente" required>
                        <option value="1" <?php if ($tipo_cliente == "1") echo "selected"; ?>>Tipo 1</option>
                        <option value="2" <?php if ($tipo_cliente == "2") echo "selected"; ?>>Tipo 2</option>
                        <option value="3" <?php if ($tipo_cliente == "3") echo "selected"; ?>>Tipo 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Cantidad de Libros del Mismo Tipo:</td>
                <td>
                    <input type="number" name="cantidad_libros" id="cantidad_libros" value="<?php echo $cantidad_libros; ?>" min="1" required>
                </td>
            </tr>
            <tr>
                <td>Costo por Libro:</td>
                <td>
                    <input type="number" name="costo_por_libro" id="costo_por_libro" value="<?php echo $costo_por_libro; ?>" min="1" step="0.01" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btnCalcular" value="Calcular">
                    <input type="submit" name="btnNuevo" value="Nuevo">
                    <input type="submit" name="btnSalir" value="Salir">
                </td>
            </tr>
        </table>
    </form>

    <div style="margin-top: 20px; border: 2px solid black; padding: 10px; margin-right:85%">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCalcular"])) {
            // Calcular descuento y mostrar resultados solo si se ha presionado el botón "Calcular"
            // Obtener los datos del formulario
            $total_sin_descuento = $cantidad_libros * $costo_por_libro;

            // Calcular el descuento según el tipo de cliente
            switch ($tipo_cliente) {
                case 1:
                    $descuento = $total_sin_descuento * 0.30;
                    break;
                case 2:
                    $descuento = $total_sin_descuento * 0.20;
                    break;
                case 3:
                    $descuento = $total_sin_descuento * 0.10;
                    break;
                default:
                    $descuento = 0;
            }

            // Calcular el neto a pagar
            $neto_a_pagar = $total_sin_descuento - $descuento;

            // Mostrar los resultados dentro del recuadro
            echo "<h3>Resultados:</h3>";
            echo "<p>Monto a Pagar: $" . number_format($total_sin_descuento, 2) . "</p>";
            echo "<p>Descuento: $" . number_format($descuento, 2) . "</p>";
            echo "<p>Neto a Pagar: $" . number_format($neto_a_pagar, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>

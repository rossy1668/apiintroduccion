<!DOCTYPE html>
<html>
<head>
    <title>Estaciones del Año</title>
</head>
<body>
    <h2>Estaciones del Año</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Ingrese un valor numérico entre 1 y 4:</label>
        <input type="number" name="numero" id="numero" min="1" max="4" required>
        <br><br>
        <input type="submit" value="Mostrar Estación">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        switch ($numero) {
            case 1:
                echo "<h3>Verano</h3>";
                break;
            case 2:
                echo "<h3>Otoño</h3>";
                break;
            case 3:
                echo "<h3>Invierno</h3>";
                break;
            case 4:
                echo "<h3>Primavera</h3>";
                break;
            default:
                echo "<p>El valor ingresado no está en el rango válido (1-4).</p>";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Suma de Números Pares e Impares</title>
</head>
<body>
    <h2>Suma de Números Pares e Impares</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="limite">Ingrese el número límite:</label>
        <input type="number" name="limite" id="limite" required>
        <br><br>
        <input type="submit" name="btnCalcular" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $limite = (int)$_POST["limite"];
        $suma_pares = 0;
        $suma_impares = 0;

        for ($i = 1; $i <= $limite; $i++) {
            if ($i % 2 == 0) { // Verifica si el número es par
                $suma_pares += $i;
            } else {
                $suma_impares += $i;
            }
        }

        echo "<h3>La suma de los números pares entre 2 y $limite es: $suma_pares</h3>";
        echo "<h3>La suma de los números impares entre 1 y $limite es: $suma_impares</h3>";
    }
    ?>
</body>
</html>

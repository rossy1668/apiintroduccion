<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo Neto</title>
</head>
<body>
    <h2>Calculadora de Sueldo Neto</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="departamento">Seleccione el departamento:</label>
        <select name="departamento" id="departamento">
            <option value="contabilidad">Contabilidad</option>
            <option value="ventas">Ventas</option>
        </select>
        <br><br>
        <label for="aporte1">Seleccione aporte AFP:</label>
        <select name="aporte1" id="aporte1">
            <option value="afp">AFP</option>
            <option value="no_afp">No AFP</option>
        </select>
        <br><br>
        <label for="aporte2">Seleccione aporte sindicato:</label>
        <select name="aporte2" id="aporte2">
            <option value="sindicato">Sindicato</option>
            <option value="no_sindicato">No Sindicato</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular Sueldo Neto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dep = $_POST["departamento"];
        $aporte1 = $_POST["aporte1"];
        $aporte2 = $_POST["aporte2"];

        if ($dep == "contabilidad") {
            $sbasico = 10000;
        } else {
            $sbasico = 9000;
        }

        if ($aporte1 == "afp") {
            $afp = 0.11 * $sbasico;
        } else {
            $afp = 0;
        }

        if ($aporte2 == "sindicato") {
            $sin = 0.03 * $sbasico;
        } else {
            $sin = 0;
        }

        $sneto = $sbasico - ($afp + $sin);

        echo "<h3>Sueldo Neto: S/ $sneto</h3>";
    }
    ?>
</body>
</html>
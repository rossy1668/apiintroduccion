<!DOCTYPE html>
<html>
<head>
    <title>Suma de Números Naturales con Estructura Repetitiva do-while</title>
</head>
<body>
    <h2>Suma de los Primeros N Números Naturales</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="txtn">Ingrese el valor de N:</label>
        <input type="number" name="txtn" id="txtn" required>
        <br><br>
        <input type="submit" name="btnCalcular" value="Calcular Suma">
    </form>

    <?php
    //Variables
    $i = 1;
    $n = 0;
    $s = 0;

    if(isset($_POST["btnCalcular"])) {
        //Entrada
        $n = (int)$_POST["txtn"];
        //Proceso
        $i = 1;
        $s = 0;
        do {
            $s += $i;
            $i++;
        } while ($i <= $n);
        // Salida
        echo "<h3>La suma de los primeros $n números naturales es: $s</h3>";
    }
    ?>
</body>
</html>

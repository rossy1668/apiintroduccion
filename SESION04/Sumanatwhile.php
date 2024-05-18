<!DOCTYPE html>
<html>
<head>
    <title>Suma de Números Naturales</title>
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
    $i = 0;
    $n = 0;
    $s = 0;

    if(isset($_POST["btnCalcular"])) {
        //Entrada
        $n = (int)$_POST["txtn"];
        //Proceso
        $i = 1;
        while($i <= $n) {
            $s = $s + $i;
            $i = $i + 1;
        }
        // Salida
        echo "<h3>La suma de los primeros $n números naturales es: $s</h3>";
    }
    ?>
</body>
</html>

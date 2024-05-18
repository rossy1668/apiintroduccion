<!DOCTYPE html>
<html>

<head>
    <title>MENOR</title>
</head>

<body>
    <?php

    // Variables
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;
    $menor = 0;

    // Función para calcular el menor
    function calcularMenor($a, $b, $c)
    {
        return min($a, $b, $c);
    }

    if (isset($_POST["btnCalcular"])) {
        // Entrada
        $n1 = (int)$_POST["txtn1"];
        $n2 = (int)$_POST["txtn2"];
        $n3 = (int)$_POST["txtn3"];

        // Proceso
        $menor = calcularMenor($n1, $n2, $n3);
    }
    ?>

    <form method="post" action="Ejercicio01.php">
        <table width="408" border="10" bgcolor="EEFA00">
            <tr>
                <td colspan="2"><strong>NUMERO MENOR</strong> </td>
            </tr>
            <tr>
                <td width="75">Numero 1 </td>
                <td width="151">
                    <input name="txtn1" type="text" id="txtn1" value="<?= $n1 ?>" />
                </td>
            </tr>
            <tr>
                <td>Numero 2 </td>
                <td>
                    <input name="txtn2" type="text" id="txtn2" value="<?= $n2 ?>" />
                </td>
            </tr>
            <tr>
                <td>Numero 3 </td>
                <td><input name="txtn3" type="text" id="txtn3" value="<?= $n3 ?>"></td>
            </tr>
            <tr>
                <td>Menor</td>
                <td><input disabled name="txtMenor" type="text" class="TextoFondo" id="txtMenor" value="<?= $menor ?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" />
                    <input name="btnNuevo" type="submit" id="btnNuevo" value="Nuevo" onclick="return reset();">&nbsp;
                    <input name="" type="button" value="Salir" onclick="salir()">&nbsp;
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

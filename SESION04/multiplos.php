<?php
//Variables
$n = isset($_POST["txtn"]) ? (int)$_POST["txtn"] : 0;
$c = 0;

if (isset($_POST["btnCalcular"])) {
    //Proceso
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 5 == 0) {
            $c++;
        }
    }
}
?>

<html>
<head>
    <title>Múltiplos</title>
    <style type="text/css">
        .TextoFondo {
            background-color: #CCFFFF;
        }
    </style>
</head>
<body>
    <form method="post" action="multiplos.php">
        <table width="274" border="0">
            <tr>
                <td colspan="2"><strong>Múltiplos de 5</strong></td>
            </tr>
            <tr>
                <td width="108">Número</td>
                <td width="156">
                    <input name="txtn" type="text" id="txtn" value="<?=$n?>" />
                </td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td>
                    <input name="txtc" type="text" class="TextoFondo" id="txtc" value="<?=$c?>" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

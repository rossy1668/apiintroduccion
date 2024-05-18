<?php
//Variables
$s0 = 0;
$s1 = 0;
$s2 = 0;
$i = 0;
$j = 0; //Arreglos
$n = array();
if (isset($_POST["btnCalcular"])) {
    //Entrada
    $n[0][0] = (int)$_POST["txtn00"];
    $n[0][1] = (int)$_POST["txtn01"];
    $n[0][2] = (int)$_POST["txtn02"];
    $n[1][0] = (int)$_POST["txtn10"];
    $n[1][1] = (int)$_POST["txtn11"];
    $n[1][2] = (int)$_POST["txtn12"];
    $n[2][0] = (int)$_POST["txtn20"];
    $n[2][1] = (int)$_POST["txtn21"];
    $n[2][2] = (int)$_POST["txtn22"];
    //Proceso
    for ($i = 0; $i <= 2; $i++) {
        $s0 += $n[$i][0];
        $s1 += $n[$i][1];
        $s2 += $n[$i][2];
    }
}
?>
<html>

<head>
    <title>Bidimensional</title>
    <style type="text/css">
        <!--
        .TextoFondo {
            background-color: #CCFFFF;
        }
        -->
    </style>
</head>

<body>
    <form method="post" action="arraybisumacol.php">
        <table width="205" border="10" bgcolor="#EEFA00" bordercolor=orange>
            <tr>
                <td colspan="4"><strong>ARRAY BIDIMENSIONAL </strong></td>
            </tr>
            <tr>
                <td colspan="4"><strong>Arreglos 3X3 </strong></td>
            </tr>
            <tr>
                <td width="52">&nbsp;</td>
                <td width="39"><input name="txtn00" type="text" id="txtn00" value="<?= $n[0][0] ?>" size="5" /></td>
                <td width="40"><input name="txtn01" type="text" id="txtn01" value="<?= $n[0][1] ?>" size="5" /></td>
                <td width="56">
                    <input name="txtn02" type="text" id="txtn02" value="<?= $n[0][2] ?>" size="5" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input name="txtn10" type="text" id="txtn10" value="<?= $n[1][0] ?>" size="5" /></td>
                <td><input name="txtn11" type="text" id="txtn11" value="<?= $n[1][1] ?>" size="5" /></td>
                <td><input name="txtn12" type="text" id="txtn12" value="<?= $n[1][2] ?>" size="5" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input name="txtn20" type="text" id="txtn20" value="<?= $n[2][0] ?>" size="5" /></td>
                <td><input name="txtn21" type="text" id="txtn21" value="<?= $n[2][1] ?>" size="5" /></td>
                <td><input name="txtn22" type="text" id="txtn22" value="<?= $n[2][2] ?>" size="5" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Suma </td>
                <td><input name="txts0" type="text" class="TextoFondo" id="txts0" value="<?= $s0 ?>" size="5" /></td>
                <td><input name="txts1" type="text" class="TextoFondo" id="txts1" value="<?= $s1 ?>" size="5" /></td>
                <td><input name="txts2" type="text" class="TextoFondo" id="txts2" value="<?= $s2 ?>" size="5" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="3"><input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
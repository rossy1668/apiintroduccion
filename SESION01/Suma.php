<?php
    //Variables
    $n1 = 0; $n2 = 0; $s = 0;
    
    if(isset($_POST["btnCalcular"])) {
        //Entrada
        $n1 = (int)$_POST["txtn1"];
        $n2 = (int)$_POST["txtn2"];
        
        //Proceso
        $s = $n1 + $n2;
    }
?>

<html>
<head>
    <title>CALCULAR LA SUMA</title>
    <style type="text/css">
        <!--
        .TextoFondo {
            background-color: #CCFFFF;
        }
        -->
    </style>
    <script> 
        function reset() {
            alert("javascript called");
            document.getElementById("txtn1").value="";
            document.getElementById("txtn2").value="";
            document.getElementById("txts").value="";
            document.getElementById("txtn1").focus();
        }
    </script>
</head>
<body bgcolor ="#33ff99">
    <font size="6">  
        <marquee direction="left" bgcolor="#FF0000" height="30">GESTION Y ADMINISTRACION WEB</marquee>
    </font> 

    <form method="post" action="suma.php">
        <table width="441" border="0">
            <tr>
                <td colspan="2"><strong>CALCULAR LA SUMA</strong></td>
            </tr>
            <tr>
                <td width="81">Número 1</td>
                <td width="150">
                    <input name="txtn1" type="text" style="text-align:right" id="txtn1" value="<?=$n1?>">
                </td>
            </tr>
            <tr>
                <td>Número 2</td>
                <td>
                    <input name="txtn2" type="text" style="text-align:right" id="txtn2" value="<?=$n2?>">
                </td>
            </tr>
            <tr>
                <td>Suma</td>
                <td>
                    <input disabled name="txts" type="text" style="text-align:right" class="TextoFondo" id="txts" value="<?=$s?>">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular">&nbsp; 
                    <input name="btnNuevo" type="button" id="btnNuevo" value="Nuevo" onclick="reset();">&nbsp; 
                    <input name="" type="button" value="Salir" onclick="salir();">&nbsp;  
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

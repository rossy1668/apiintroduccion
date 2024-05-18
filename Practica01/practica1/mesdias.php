<?php
//Variables
$dias= 0; $mes = 0; $anio = 0; $cad="";
if(isset($_POST["btnCalcular"])) {
//Entrada
$mes = (int)$_POST["txtmes"];
$anio = (int)$_POST["txtanio"];

switch ($mes)
{
case 1: // enero
$dias=31;
break;
case 3: // marzo
$dias=31;
break;
case 5: // mayo
$dias=31;
break;
case 7: // julio
$dias=31;
break;
case 8: // agosto
$dias=31;
break;
case 10: // octubre

$dias=31;
break;
case 12: // diciembre
$dias=31;
break;
case 4: // abril
$dias = 30;
break;
case 6: // junio
$dias = 30;
break;
case 9: // setiembre
$dias = 30;
break;
case 11: // noviembre
$dias = 30;
break;
case 2: // febrero
// Es el año bisiesto si febrero tiene 29 dias
if ($anio % 4 == 0) // el año es bisiesto si es múltiplo de 4
// if (($anio % 4 == 0) && ($anio % 100 != 0) || ($anio % 400 == 0)) // otra forma
$dias = 29;
else
$dias = 28;
break;
default:
$cad ="El mes no es válido";
break;
}

if ($mes >= 1 && $mes <= 12)

$cad ="El mes " . $mes . " del a&ntilde;o " . $anio .
" tiene " . $dias . " dias ";

}
?>

<html>
<head>
<title>Mes-Dias</title>
<style type="text/css">

.TextoFondo {
background-color: #CCFFFF;
}

</style>
<function reset(){
alert("javascript called");
document.getElementById("txtmes").value="";
document.getElementById("txtanio").value="";
document.getElementById("txtcad").value="";
document.getElementById('txtmes').focus();
} >

<!--
<script>
function salir(){
var resp = confirm("¿Esta seguro de salir?");
if(resp == true) {
window.open('','_self','');

window.close()
}
}
</script>
-->

<script>
function salir() //Esta es la funcion en javascript que realicé para salir
{
var resp = confirm("¿Esta seguro de salir?");
if(resp == true) {
document.location.href="http://localhost/";
}
}
</script>
</head>

<body>
<body onload="document.getElementById('txtnom').focus()">
<form method="post" action="mesdias.php">
<table width="460" border="10" bgcolor="EEFA00" bordercolor = orange>
<tr>
<td colspan="2"><center><strong>Mes-Dias</strong></center> </td>
</tr>
<tr>
<td width="90">Nro. de mes </td>
<td width="171">
<input name="txtmes" type="text" id="txtmes" value="<?=$mes?>" /> </td>
</tr>
<tr>
<td>A&ntilde;o </td>

<td>
<input name="txtanio" type="text" id="txtanio" value="<?=$anio?>"/> </td>
</tr>
<tr>
<td>Resultado </td>
<td><input disabled name="txtcad" type="text" class="TextoFondo" id="txtcad" size='40'
value="<?=$cad?>"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>
<input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" /> &nbsp;
<input name="btnNuevo" type="submit" id="btnNuevo" value="Nuevo" onclick="return
reset();" > &nbsp;
<input name="" type="button" value="Salir" onclick="salir()">
</td>
</tr>
</table>
</form>
</body>
</html>
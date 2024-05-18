<?php

//Variables
$i = 0; $s = 0;
        
//Arreglos
$n = array();
$n[0]= 0;
$n[1]= 0;
$n[2]= 0;
$n[3]= 0; 
$n[4]= 0; 

// Pulsando el botón Calcular
if(isset($_POST["btnCalcular"])) {
	//Entrada
	$n[0] = (int)$_POST["txtn1"];	
	$n[1] = (int)$_POST["txtn2"];	
	$n[2] = (int)$_POST["txtn3"];	
	$n[3] = (int)$_POST["txtn4"];	
	$n[4] = (int)$_POST["txtn5"];			
	//Proceso
	for($i = 0; $i <= 4; $i++){
                $s += $n[$i];
	}
}
?>

<html>
<head>
<title>Array suma</title>
<style type="text/css">
.TextoFondo {
	background-color: #CCFFFF;
}
</style>
</head>
<body>
<form method="post" action="arraysuma.php">
  <table width="200" border="5" bordercolor="orange" bgcolor="yellow">
    <tr>
      <td colspan="2"><strong>ARRAY SUMA</strong> </td>
    </tr>
    <tr>
      <td width="83">Numero 1 </td>
      <td width="72">
        <input name="txtn1" type="text" id="txtn1" value="<?=$n[0]?>" size="10" />      </td>
    </tr>
    <tr>
      <td>Numero 2 </td>
      <td><input name="txtn2" type="text" id="txtn2" value="<?=$n[1]?>" size="10" /></td>
    </tr>
    
    <tr>
      <td>Numero 3 </td>
      <td><input name="txtn3" type="text" id="txtn3" value="<?=$n[2]?>" size="10" /></td>
    </tr>
    <tr>
      <td>Numero 4 </td>
      <td><input name="txtn4" type="text" id="txtn4" value="<?=$n[3]?>" size="10" /></td>
    </tr>
    <tr>
      <td>Numero 5 </td>
      <td><input name="txtn5" type="text" id="txtn5" value="<?=$n[4]?>" size="10" /></td>
    </tr>
    <tr>
      <td>Suma</td>
      <td><input name="txts" type="text" class="TextoFondo" id="txts" value="<?=$s?>" size="10" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" />      </td>
    </tr>
  </table>
</form>
</body>
</html>
<?php

//Variables
$r = 0; $v = 0.0;

if(isset($_POST["btnCalcular"])) {
	//Entrada
	$r = (int)$_POST["txtr"];
	//Proceso
        define("PI", 3.1416);
	$v = (4/3)*PI*($r * $r *$r);
}

?>

<html>
<head>

<title>CALCULAR VOLUMEN</title>

<style type="text/css">
.TextoFondo {
	background-color: #CCFFFF;
}
</style>

<function reset(){
alert("javascript called");
document.getElementById("txtr").value="";
document.getElementById("txtv").value="";
document.getElementById('txtr').focus();

} >

<script> 
   function salir()       //esta es la funcion en javascript que realicé para salir
   { 
   var resp = confirm("¿Esta seguro de salir?");
   if(resp == true) {
   document.location.href="http://localhost/"; 
    }
    } 
</script>

</head>
<body bgcolor ="33ff99">
 <font size=5>  <marquee DIRECTION = "LEFT" BGCOLOR = "#FF0000" HEIGHT = "30"  
                  behavior="alternate">CALCULAR EL VOLUMEN DE UNA ESFERA  </marquee></font> 
<!-- <body background="C:\imágenes de muestra\INVIERNO.JPG"> -->
<body onload="document.getElementById('txtr').focus()">  

<form method="post" action="volumenesfera.php">
<!--  <table width="441" border="0">-->
  <table align="center" width="441" border="5" bgcolor="EEFA00">
    <tr>
      <td colspan="2"><strong>CALCULAR EL VOLUMEN DE UNA ESFERA</strong> </td>
    </tr>
    <tr>
      <td width="81">Radio </td>
      <td width="150">
        <input name="txtr" type="text" style="text-align:right"   id="txtr" 
                                                         value="<?=$r?>" > </td>
    </tr>
    <tr>
      <td>Volumen</td>
        <!-- MOSTRAR RESULTADO -->
      <td><input disabled name="txtv" type="text"  style="text-align:right"  
                                class="TextoFondo" id="txtv" value="<?=$v?>" > </td>
    </tr>
    <tr>
       <td>&nbsp;</td>
       <td>
         <input name="btnCalcular" type="submit" id="btnCalcular" 
                                                          value="Calcular" >&nbsp; 

         <input name="btnNuevo" type="submit" id="btnNuevo" value="Nuevo"  
                                                    onclick="return reset();" >&nbsp; 
              
         <input name="" type="button" value="Salir"  onclick="salir()">&nbsp; 

      </td>
        
    </tr>

  </table>

</form>

</body>
</html>
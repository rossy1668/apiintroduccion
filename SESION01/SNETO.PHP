<HTML>
<HEAD>
 <TITLE>SALARIO NETO</TITLE>
</HEAD>
<BODY>
<?php
$salariobase = 3500;
$impuesto = 20;  //  Porcentaje
$salarioneto = $salariobase -(($salariobase/100) * $impuesto);
echo "Sueldo del trabajador sin impuesto: $salariobase<BR>";
echo "Con el impuesto : $salarioneto";
?>
</BODY>
</HTML>

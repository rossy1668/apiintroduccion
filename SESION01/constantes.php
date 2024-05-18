<html> 
<head> 
   <title>Constantes</title>
</head> 
<body> 
<?php 
$r=6;
define("PI",3.1416);
define("TEXTO","Mi página favorita");
$volesfera=(4/3)*PI*(pow($r,3));
echo TEXTO;
echo "<br>";
echo "Volumen de la esfera de radio 6 es ".$volesfera;
?> 
</body> 
</html>

<html>

<head>

<title>Selectiva simple</title>

</head>

<body>

<?php

$nota =0;

$nota=$_POST["nota"]; // array asociativo para accede a la información enviada.

echo "La nota es : $nota <br>";

if($nota <= 10){

echo "Nota Desaprobatoria";

}

?>

</body>

</html>
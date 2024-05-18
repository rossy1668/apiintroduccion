<?php

$semana = array(
    "lunes", "martes", "miércoles", "jueves", "viernes", "s&aacute;bado",
    "domingo"
);

echo count($semana); //7

echo "<br>";

//situamos el puntero en el primer elemento

reset($semana);

echo "<br>";

echo current($semana); //lunes

echo "<br>";

next($semana);

echo "<br>";
echo pos($semana); //martes

echo "<br>";

end($semana);

echo "<br>";

echo pos($semana); //domingo

echo "<br>";

prev($semana);

echo "<br>";

echo current($semana); //sábado
?>
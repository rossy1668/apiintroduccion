<?php

$ciudad = array("Par&iacute;s", "Roma", "Sevilla", "Londres");

//contamos el número de elementos de la tabla

$numelentos = count($ciudad);

//Impresión del vector

$cantidad = count($ciudad);

echo("La cantidad de ciudades son: ".$cantidad."<br>");

//imprimimos todos los elementos de la tabla

for ($i=0; $i < $numelentos; $i++)

{

print ("La ciudad $i es $ciudad[$i] <BR>\n");

}

?>
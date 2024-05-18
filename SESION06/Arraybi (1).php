<?php
//Definición de variables
 $i=0; $j=0; $suma=0;
// Definición e inicialización del array bidimensional
$valor[0][0]=1; $valor[0][1]=14; $valor[0][2]=8; $valor[0][3]=3;
$valor[1][0]=6; $valor[1][1]=19; $valor[1][2]=7; $valor[1][3]=2;
$valor[2][0]=3; $valor[2][1]=13; $valor[2][2]=4; $valor[2][3]=1;
// Proceso
for ($i=0; $i<=2; $i++) {
 for ($j=0; $j<=3; $j++){
 $suma += $valor[$i][$j];
 }
}
// Impresión o salida
echo "La suma de todos los elementos del array es: ".$suma;
?>
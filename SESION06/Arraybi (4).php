<?php
$b[0]["nombre"] = "Silvia";
$b[1]["nombre"] = "Isabel";
$b[0]["edad"] = 25;
$b[1]["edad"] = 20;
/* De nuevo, se recomienda probar este código
para ver el resultado */
foreach ($b as $persona) {
    foreach (array_keys($persona) as $campo) {
        echo "$campo: $persona[$campo]<br>";
    }
}

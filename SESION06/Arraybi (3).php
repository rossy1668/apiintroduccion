<?php
$calendario = array();
$calendario[] = array(1, "Enero", 31);
$calendario[] = array(2, "Febrero", 28);
$calendario[] = array(3, "Marzo", 31);
$calendario[] = array(4, "Abril", 30);
$calendario[] = array(5, "Mayo", 31);
$calendario[] = array(6, "Junio", 30);
$calendario[] = array(7, "Julio", 31);
$calendario[] = array(8, "Agosto", 31);
$calendario[] = array(9, "Setiembre", 30);
$calendario[] = array(10, "Octubre", 31);
$calendario[] = array(11, "Noviembre", 30);
$calendario[] = array(12, "Diciembre", 31);

foreach ($calendario as $valor) {
    $cadena = $valor[1] . " es el mes número " . $valor[0] . " y tiene " . $valor[2] . " días<br>";
    echo $cadena;
}
?>
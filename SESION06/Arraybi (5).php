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
?>
<body bgcolor="#e4ccb4">
<hr>
<font size="12" color="#eae6ca" class="ts1"><center>CALENDARIO</center></font>
<style>
    .ts1 {
        text-shadow: 2px 2px 5px #efb810;
    }
    .ts2 {
        text-shadow: 2px 2px 5px #000000;
    }
</style>
<table align="center" border="10" bgcolor="#dcc4c4" bordercolor="#e4dcc4">
<?php
foreach ($calendario as $valor) {
    echo "<tr>";
    $cadena = $valor[1] . " es el mes número " . $valor[0] . " y tiene " . $valor[2] . " días<br>";
    echo "<td class='ts2'>" . "<font size='5' color='#FFFFFF'>" . $cadena . "</font>" . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
?>
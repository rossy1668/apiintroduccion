<?php
//Variables
$b = isset($_POST["txtb"]) ? (int)$_POST["txtb"] : 0;
$h = isset($_POST["txth"]) ? (int)$_POST["txth"] : 0;
$area = 0.0;

if(isset($_POST["btnCalcular"])) {
    //Proceso
    $area = ($b * $h)/2;
}
?>
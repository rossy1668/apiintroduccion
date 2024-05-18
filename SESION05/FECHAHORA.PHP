<?php
/* nombramos en una matriz los nombres de los meses y días*/
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$dias = array("Domingo", "Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "Sábado");
date_default_timezone_set('America/Lima');

$miFecha = date('d-m-Y');
$fecha = substr($miFecha, 0, 10);

$dia2 = date('w', strtotime($fecha));  // devuelve el número de día de la semana
$dia = date('j', strtotime($fecha));  // devuelve el día del mes
$mes = date('n', strtotime($fecha));
$mes = $mes - 1;  // devuelve el número del mes
$anual = date('Y', strtotime($fecha));  // devuelve el año

$fechacad = $dias[$dia2] . ", " . $dia . " de " . $meses[$mes] . " de " . $anual;

?>

<html>

<head>
    <title>:: Formulario ::</title>
</head>
<script>
    var intval = ""

    if (intval == "") {
        intval = window.setInterval("start_clock()", 1000);
    }


    function start_clock() {
        var d = new Date();
        var sw = "am";
        var h = d.getHours();
        var m = d.getMinutes() + "";
        var s = d.getSeconds() + "";
        if (h > 12) {
            h -= 12;
            sw = "pm";
        }
        if (m.length == 1) {
            m = "0" + m;
        }
        if (s.length == 1) {
            s = "0" + s;
        }


        document.form.tiempo.value = h + ":" + m + ":" + s + " " + sw;
    }
</script>

<body>

    <body bgcolor="33ff99">

        <form id="form" name='form'>


            <!-- Si la caja de texto está deshabilitada en IE no muestra el color del fuente -->
            <font size="5" color=blue>Fecha/Hora : </font>&nbsp; &nbsp;&nbsp; <input disabled name="fecha" type="text" maxlength="25" size="25" style="font-size:20pt;color:#ff0000;text-align:center;" value="<?= $fechacad ?>" />
            <input name="tiempo" type="text" maxlength="25" size="25" style="font-size:20pt;color:#ff0000;text-align:center;" value="" /><br />

        </form>

    </body>

</html>
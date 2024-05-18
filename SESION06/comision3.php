<?php
if (isset($_POST["numope1"]) && isset($_POST["operario"]) && isset($_POST["polos"]) && isset($_POST["camisas"]) && isset($_POST["pantalones"])) {
    $numope1 = $_POST["numope1"];
    $operario = $_POST["operario"];
    $polos = $_POST["polos"];
    $camisas = $_POST["camisas"];
    $pantalones = $_POST["pantalones"];
    $total = 0;

    for ($i = 0; $i < $numope1; $i++) {
        $subtotal = $polos[$i] * 3 + $camisas[$i] * 5 + $pantalones[$i] * 7;
        echo "Operario: " . $operario[$i] . " Salario: " . $subtotal . "<br>";
        $total = $total + $subtotal;
    }

    echo "<hr>Total a pagar " . $total;
} else {
    echo "No se han recibido los datos esperados del formulario.";
}
?>
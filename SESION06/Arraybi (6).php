<?php
$pedidos = array();
$pedidos[] = array("Lince", 40, 12000);
$pedidos[] = array("Jesus Maria", 60, 27000);
$pedidos[] = array("San Isidro", 45, 9000);
$pedidos[] = array("Los Olivos", 65, 30000);
$pedidos[] = array("Comas", 35, 28000);
$pedidos[] = array("Puente Piedra", 20, 12000);
?>

<body bgcolor="#33FF99">
    <hr>
    <font size="12" color="#FF0000">
        <center>PEDIDOS</center>
    </font>
    <table align="center" border="10" bgcolor="#EEFA00" bordercolor="cyan">
        <?php
        foreach ($pedidos as $pedido) {
            echo "<tr>";
            $distrito = $pedido[0];
            $vendedores = $pedido[1];
            $total = $pedido[2];
            echo "<td>" . "<font size='5' color='blue'>" . "En " . $distrito . " los " . $vendedores . " vendedores colocaron " . $total . " dólares en pedidos <br>" . "</font>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr>";
        ?>
</body>
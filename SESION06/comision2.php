<body bgcolor="#33FF99">
    <form method="POST" action="comision3.php">
        PRODUCCION:<br>
        <table width="400" border="10" bgcolor="#EEFA00" bordercolor="cyan">
            <tr>
                <td>Operario</td>
                <td>Polos (S/.3)</td>
                <td>Camisas (S/.5)</td>
                <td>Pantalones (S/.7)</td>
            </tr>
            <?php $numope = $_POST["numope"]; ?>
            <input type="hidden" name="numope1" value="<?php echo $numope ?>">
            <?php for ($i = 0; $i < $numope; $i++) { ?>
                <tr>
                    <td><input type="text" name="operario[]"></td>
                    <td><input type="text" name="polos[]"></td>
                    <td><input type="text" name="camisas[]"></td>
                    <td><input type="text" name="pantalones[]"></td>
                </tr>
            <?php } ?>
        </table>
        <input type="submit" value="Enviar Consulta">
    </form>
</body>
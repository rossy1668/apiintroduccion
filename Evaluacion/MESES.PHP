<!DOCTYPE html>
<html>

<head>
    <title>Meses del Año</title>
    <style>
        body {
            background-color: #404040;
            color: #fff;
            font-size: 25px;
        }

        .enero {
            color: #AE6938;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .febrero {
            color: #C8A2C8;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .marzo {
            color: #00FFFF;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .abril {
            color: #e3492d;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .mayo {
            color: green;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .junio {
            color: #EABE3F;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .julio {
            color: #FF7F50;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .agosto {
            color: orange;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .septiembre {
            color: #87CEEB;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .octubre {
            color: #0000FF;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .noviembre {
            color: #a2231d;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        .diciembre {
            color: #C0C0C0;
            text-shadow: 1px 1px 2px #fff0ff;
        }

        h1 {
            font-size: 50px;
        }
    </style>
</head>

<body>
    <h2>Meses del Año</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="mes">Selecciona un mes:</label>
        <select name="mes" id="mes" required>
            <option value="1" <?php if (isset($_POST['mes']) && $_POST['mes'] == '1') echo 'selected'; ?>>Enero</option>
            <option value="2" <?php if (isset($_POST['mes']) && $_POST['mes'] == '2') echo 'selected'; ?>>Febrero</option>
            <option value="3" <?php if (isset($_POST['mes']) && $_POST['mes'] == '3') echo 'selected'; ?>>Marzo</option>
            <option value="4" <?php if (isset($_POST['mes']) && $_POST['mes'] == '4') echo 'selected'; ?>>Abril</option>
            <option value="5" <?php if (isset($_POST['mes']) && $_POST['mes'] == '5') echo 'selected'; ?>>Mayo</option>
            <option value="6" <?php if (isset($_POST['mes']) && $_POST['mes'] == '6') echo 'selected'; ?>>Junio</option>
            <option value="7" <?php if (isset($_POST['mes']) && $_POST['mes'] == '7') echo 'selected'; ?>>Julio</option>
            <option value="8" <?php if (isset($_POST['mes']) && $_POST['mes'] == '8') echo 'selected'; ?>>Agosto</option>
            <option value="9" <?php if (isset($_POST['mes']) && $_POST['mes'] == '9') echo 'selected'; ?>>Septiembre</option>
            <option value="10" <?php if (isset($_POST['mes']) && $_POST['mes'] == '10') echo 'selected'; ?>>Octubre</option>
            <option value="11" <?php if (isset($_POST['mes']) && $_POST['mes'] == '11') echo 'selected'; ?>>Noviembre</option>
            <option value="12" <?php if (isset($_POST['mes']) && $_POST['mes'] == '12') echo 'selected'; ?>>Diciembre</option>
        </select>
        <br><br>
        <input type="submit" value="Mostrar Mes">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes = $_POST["mes"];

        switch ($mes) {
            case 1:
                echo "<h1 class='enero'>Enero</h1>";
                break;
            case 2:
                echo "<h1 class='febrero'>Febrero</h1>";
                break;
            case 3:
                echo "<h1 class='marzo'>Marzo</h1>";
                break;
            case 4:
                echo "<h1 class='abril'>Abril</h1>";
                break;
            case 5:
                echo "<h1 class='mayo'>Mayo</h1>";
                break;
            case 6:
                echo "<h1 class='junio'>Junio</h1>";
                break;
            case 7:
                echo "<h1 class='julio'>Julio</h1>";
                break;
            case 8:
                echo "<h1 class='agosto'>Agosto</h1>";
                break;
            case 9:
                echo "<h1 class='septiembre'>Septiembre</h1>";
                break;
            case 10:
                echo "<h1 class='octubre'>Octubre</h1>";
                break;
            case 11:
                echo "<h1 class='noviembre'>Noviembre</h1>";
                break;
            case 12:
                echo "<h1 class='diciembre'>Diciembre</h1>";
                break;
            default:
                echo "<p>No se ha seleccionado un mes válido.</p>";
        }
    }
    ?>
</body>

</html>

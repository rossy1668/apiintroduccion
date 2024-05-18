<!DOCTYPE html>
<html>

<head>
    <title>Número Menor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9efb3;
            color: #000;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 30%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5e375;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 80%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            align-content: center;
        }

        input[type="submit"], input[type="button"] {
            width: 30%;
            padding: 10px;
            margin: 10px 1%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        input[type="button"] {
            background-color: #f44336;
            color: white;
        }

        .result {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #007cbf;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h2>Encuentra el Número Menor</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <label for="numero<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
            <input type="number" name="numero<?php echo $i; ?>" id="numero<?php echo $i; ?>" required>
        <?php endfor; ?>
        <br>
        <input type="submit" value="Encontrar el Menor">
        <input type="button" value="Nuevo" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'">
        <input type="button" value="Salir" onclick="window.close()">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = [];
        for ($i = 1; $i <= 6; $i++) {
            $numeros[] = $_POST["numero$i"];
        }

        $numero_menor = min($numeros);

        echo "<div class='result'>";
        echo "<p>El número menor es: " . $numero_menor . "</p>";
        echo "</div>";
    }
    ?>
</body>

</html>

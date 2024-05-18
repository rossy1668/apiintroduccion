<!DOCTYPE html>
<html>

<head>
    <title>Cuenta de Múltiplos de 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        h2 {
            color: #333;
        }

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .result p {
            margin: 0;
        }
    </style>
</head>

<body>
    <h2>Cuenta de Múltiplos de 5</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num">Ingrese un número:</label>
        <input type="number" name="num" id="num" min="1" required>
        <br>
        <input type="submit" value="Contar Múltiplos de 5">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        $contador = 0;

        for ($i = 1; $i <= $num; $i++) {
            if ($i % 5 == 0) {
                $contador++;
            }
        }

        echo "<div class='result'>";
        echo "<p>El total de números entre 1 y $num que son múltiplos de 5 es: $contador</p>";
        echo "</div>";
    }
    ?>
</body>

</html>

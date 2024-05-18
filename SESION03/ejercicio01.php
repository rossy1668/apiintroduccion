<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de volumen de esfera</title>
</head>
<body>
    <h2>Calculadora de volumen de esfera</h2>
    <form method="post" action="">
        Radio de la esfera: <input type="text" name="radio"><br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se ha enviado un valor para el radio
        if (!empty($_POST['radio'])) {
            $radio = $_POST['radio'];

            // Calcular el volumen de la esfera
            $volumen = (4/3) * pi() * pow($radio, 3);

            // Mostrar el resultado
            echo "<br>El volumen de la esfera con radio $radio es: " . round($volumen, 2);
        } else {
            // Si no se ha enviado un valor para el radio, mostrar un mensaje de error
            echo "Por favor ingrese el valor del radio de la esfera.";
        }
    }
    ?>
</body>
</html>
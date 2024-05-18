<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./style.css">
    <meta name="description" content="Formulario de contacto creado con PHP">
    <!--buen SEO, descripción que aparece en el buscador -->
</head>

<body>
    <main class="main-content">
        <form action="send.php" method="post">
            <!--atributo para enviar a otra página send.php, post para que sea un envio de form seguro -->
            <h1>Formulario</h1>
            <br>
            <ul class="fields">
                <li class="field name">
                    <label>
                        Nombre (*)
                        <input placeholder="María" name="nombre" type="text" id="nombre" value="<?=$_REQUEST['nombre']??"María";?>">
                    </label>
                </li>
                <li class="field apellido">
                    <label>
                        Apellidos
                        <input type="text" placeholder="Duvale Barbeitos" name="apellido">
                    </label>
                </li>
                <li class="field edad">
                    <label>
                        Edad
                        <input type="text" placeholder="27" name="edad">
                    </label>
                </li>
                <li class="field sexo">
                    <fieldset class="sex-fieldset">
                        <legend>Sexo</legend>
                        <label>
                            <input id="mujer" type="radio" name="sexo" value="mujer">Mujer
                        </label>
                        <label>
                            <input id="hombre" type="radio" name="sexo" value="hombre">Hombre
                        </label>
                    </fieldset>
                </li>
                <li class="field email">
                    <label>Email (*)
                        <input id="email" type="email" name="email" placeholder="mar.barbeitos@gmail.com" value="<?=$_REQUEST['email']??"mar.barbeitos@gmail.com";?>">
                    </label>
                </li>
                <li class="field phone">
                    <label>Teléfono
                        <input type="number" name="phone" placeholder="660654321">
                    </label>
                </li>
                
            </ul>
            <div aria-describedby="nombre email" role="alert" id="alert">
                Los campos con asterisco (*) son obligatorios
            </div>
            <button class="btn-enviar" name="btn-enviar" type="submit">Enviar</button>
        </form>
    </main>

</body>

</html>
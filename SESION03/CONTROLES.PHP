<?php
error_reporting(0);

if (isset($_POST['enviar'])) {
    $dni = $_POST['dni'];
    $nom = $_POST['nombre'];
    $apel = $_POST['apellido'];

    echo "<hr>";
    echo "DATOS DEL USUARIO <BR>";
    echo "<hr>";
    echo "DNI: $dni <BR>";
    echo "Nombre: $nom <BR>";
    echo "Apellidos: $apel <BR>";
    echo "<br>";

    if ($_FILES['archivo']['name'] != "" && $_FILES['archivo']['size'] != 0) {
        $nombre_temporal = $_FILES["archivo"]["tmp_name"];
        $nombre = $_FILES["archivo"]["name"];
        $tam = $_FILES["archivo"]["size"];
        $tipo = $_FILES["archivo"]["type"];

        echo "DATOS DE LA FOTO <BR>";
        echo "<HR>";  

        echo "Fichero temporal: $nombre_temporal <BR>";
        echo "Nombre: $nombre <BR>";
        echo "Tamaño: $tam <BR>";
        echo "Tipo: $tipo <BR>";

        $directorio_destino = __DIR__ . DIRECTORY_SEPARATOR . 'fotos' . DIRECTORY_SEPARATOR; // Directorio donde se guardarán las fotos
        if (!file_exists($directorio_destino)) {
            mkdir($directorio_destino, 0777, true); // Crea el directorio si no existe
        }

        if (move_uploaded_file($nombre_temporal, $directorio_destino . $nombre)) {
            echo "<h2>Archivo guardado correctamente en: $directorio_destino$nombre</h2>";
        } else {
            echo "<h2>No se ha podido copiar el archivo</h2>";
        }
    } elseif ($_FILES['archivo']['name'] != "" && $_FILES['archivo']['size'] == 0) {
        echo "<h2>Tamaño de archivo superado</h2>";
    } else {
        echo "<h2>No ha escogido un archivo de foto para descargar</h2>";
    }

    echo "<HR>";  
    echo "<img src=\"fotos/$nombre\">" . "<br>"; 
    echo "<HR>";  

    // Restablecer los valores de las variables
    $dni = "";
    $nom = "";
    $apel = "";
    $pass = "";
}
?>

<HTML>

<BODY>

<body bgcolor="33ff99">

<FORM ENCTYPE="multipart/form-data" ACTION="" METHOD="post">


<script>
    function resetForm() {
        alert("javascript called");
        document.getElementById("dni").value = "";
        document.getElementById("nombre").value = "";
        document.getElementById("apellido").value = "";
        document.getElementById("contrasena").value = "";

        document.getElementById('dni').focus();
    }
</script>


<script>
    function Salir() {
        var resp = confirm("¿Esta seguro de salir?");
        if (resp == true) {
            document.location.href = "http://localhost:8080/dashboard/";
        }
    }
</script>

<div>
    <fieldset>
        <legend>Informaci&oacute;n personal</legend>
        DNI : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="dni" id="dni" type="text"
            maxlength="30" size="20" value="<?= $dni ?>" /><br />
        Nombres : &nbsp;&nbsp;&nbsp; <input name="nombre" id="nombre" type="text" maxlength="30" size="20"
            value="<?= $nom ?>" /><br />
        Apellidos : &nbsp;&nbsp; <input name="apellido" id="apellido" type="text" maxlength="30" size="20"
            value="<?= $apel ?>" /><br />
        Contraseña : &nbsp;<input name="contrasena" id="contrasena" type="password" maxlength="30" size="20"
            value="<?= $pass ?>" /><br /><br />
        G&eacute;nero:<br />


        <input name="genero" type="radio" value="masculino" checked="checked" <?php if ($genero == "masculino") echo "CHECKED"; ?>> Masculino
        <br />

        <input name="genero" type="radio" value="femenino" <?php if ($genero == "femenino") echo "CHECKED"; ?>> Femenino
        <br />

    </fieldset>


    <fieldset>
        <legend>Aficiones</legend>

        <input name="intereses1" type="checkbox" value="deportes" <?php if ($intereses1 == "deportes") echo "CHECKED"; ?>> Deportes
        <br />

        <input name="intereses2" type="checkbox" value="peliculas" <?php if ($intereses2 == "peliculas") echo "CHECKED"; ?>> Peliculas
        <br />

        <input name="intereses3" type="checkbox" value="viajes" <?php if ($intereses3 == "viajes") echo "CHECKED"; ?>> Viajes
        <br />
        <input name="intereses4" type="checkbox" value="arte" <?php if ($intereses4 == "arte") echo "CHECKED"; ?>> Arte
        <br />
        <input name="intereses5" type="checkbox" value="musica" <?php if ($intereses5 == "musica") echo "CHECKED"; ?>> Musica
        <br />

    </fieldset>


    <fieldset>
        <legend>DEPARTAMENTO(Nacimiento)</legend>

        <SELECT NAME="depto">
            <OPTION <?php if ($depto == "lima") echo "SELECTED"; ?> VALUE="lima">LIMA</OPTION>
            <OPTION <?php if ($depto == "la libertad") echo "SELECTED"; ?> VALUE="la libertad">LA LIBERTAD</OPTION>
            <OPTION <?php if ($depto == "ancash") echo "SELECTED"; ?> VALUE="ancash">ANCASH</OPTION> <br />
        </SELECT>

    </fieldset>


    <fieldset>
        <legend>Distrito(Residencia)</legend>
        <SELECT NAME="dist" SIZE="6">
            <OPTION <?php if ($dist == "los olivos") echo "SELECTED"; ?> VALUE="los olivos">LOS OLIVOS</OPTION>
            <OPTION <?php if ($dist == "independencia") echo "SELECTED"; ?> VALUE="independencia">INDEPENDENCIA</OPTION>
            <OPTION <?php if ($dist == "comas") echo "SELECTED"; ?> VALUE="comas">COMAS</OPTION>
            <OPTION <?php if ($dist == "puente piedra") echo "SELECTED"; ?> VALUE="puente piedra">PUENTE PIEDRA</OPTION>
            <OPTION <?php if ($dist == "ancon") echo "SELECTED"; ?> VALUE="ancon">ANCON</OPTION>
            <OPTION <?php if ($dist == "el rimac") echo "SELECTED"; ?> VALUE="el rimac">EL RIMAC</OPTION>
        </SELECT>
    </fieldset>


    <INPUT type="hidden" name="MAX_FILE_SIZE" value="49135380"> <!-- Tamaño máximo de la foto seleccionada -->

    <p><b>Seleccione la foto<b><br>

            <INPUT type="file" name="archivo" size="35"></p>

    <br />
    <hr>


    <INPUT type="submit" name="enviar" value="Enviar" />


    <input name="borrarform" type="submit" value="Borrar formulario" onclick="resetForm();" />

    <input name="cerrarform" type="button" value="Cerrar formulario" onclick="Salir()" />
    <input name="ncuenta" type="hidden" value="0000-WTY-00907530" />
    <br>
    <br>

    <fieldset>
        <legend>FOTO</legend>

        <table align="left" border="10" bordercolor=orange>
            <tr>
                <th height="67" scope="col">
                    <label>
                        <CENTER>
                            <H3>FOTO SELECCIONADA</H3>
                        </CENTER>

                        <TEXTAREA disabled ROWS="15" COLS="40" STYLE="background-image:url(fotos/<?php echo $nombre; ?>);
background-repeat:no-repeat;
background-position:center"> </TEXTAREA>

                    </label>&nbsp;</th>
            </tr>
        </table>

    </fieldset>

</div>

</FORM>

</BODY>

</HTML>

<?php

extract($_POST); // convertir los índices en variables de un array asociativo

if(isset($nombre)){

    if (strlen(trim($nombre)) === 0 || strlen(trim($email)) === 0) {
        echo "Error. No cubriste los campos requeridos.";
    } else {
        if ((isset($nombre)) && (isset($apellido)) ) {
            echo "Hola soy $nombre $apellido! Tengo $edad años, soy $sexo, mi email es $email y mi número de teléfono es $phone";
        }else{
            echo "El formulario se ha enviado con éxito. Gracias por completar el formulario.";
        }
        
    }

}else{
    die("Permisos insuficientes.");
}

echo '<a href="javascript:history.back(-1)">Volver</a>';

?>
<!-- if (isset($_POST["submit"])) {
            echo "Su formulario ha sido enviado correctamente";
        } -->
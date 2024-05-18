<?php

$formularioEnviado = false; 

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $formularioEnviado = true;
    extract($_POST);

    if(empty(trim($nombre))) {
        $errorNombre = true;
    }

    if(empty(trim($email))) {
        $errorCorreo = true;
    }

    if (!isset($errorNombre) && !isset($errorEmail)) {
        header('Location: http://localhost/enviado.html');
    }
}

?>
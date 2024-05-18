<?php

$visitas = array("lunes"=>200, "martes"=>186, "miércoles"=>190, "jueves"=>175);

foreach ($visitas as $dia => $numero_visitas) {
    echo "El día $dia ha tenido $numero_visitas visitas<br>";
}

?>
<?php
    $inicio = $_GET["inicioIntervalo"];
    $final = $_GET["finalIntervalo"];

    $val = 0;
    for ($i = $inicio; $i <= $final; $i++) {
        $val = $i;
        echo "$i<br/>";
    }

?>
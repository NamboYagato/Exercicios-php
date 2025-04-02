<?php
    $numero = $_GET['numero'];

    if ($numero > 0) {
        echo "Positivo";
    } else if ($numero == 0) {
        echo "Zero";
    } else {
        echo "Negativo";
    }
?>
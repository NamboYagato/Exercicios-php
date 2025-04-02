<?php
    $numero1 = $_GET['numero1'];
    $resposta1 = ($numero1 % 2 == 0 ? "Par" : "Impar");
    $resposta2 = ($numero1 > 0 ? "Positivo" : "Negativo");
    echo "O número $numero1 é $resposta1 e $resposta2";
?>
<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $numero3 = $_GET['numero3'];

    $respostaNumero1 = ($numero1 > 0 ? $numero1 * 2 : $numero1 * 3);
    $respostaNumero2 = ($numero2 > 10 && $numero1 < 100 ? "Intervalo permitido" : "Intervalo não permitido");
    $respostaNumero3 = ($numero3 < $numero2 ? $numero3 - $numero2 : $numero3 + 1);

    echo "primeiro valor: $respostaNumero1 <br> segundo valor: $respostaNumero2 <br> terceiro valor: $respostaNumero3";
?>
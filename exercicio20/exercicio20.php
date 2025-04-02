<?php
    if ($_GET["nota1"] > 10 || $_GET["nota1"] < 0) {
        echo "Primeira Nota invalida!!!";
        exit;
    } else {
        $nota1 = $_GET["nota1"];
    }

    if ($_GET["nota2"] > 10 || $_GET["nota2"] < 0) {
        echo "Segunda Nota invalida!!!";
        exit;
    } else {
        $nota2 = $_GET["nota2"];
    }

    if ($_GET["nota3"] > 10 || $_GET["nota3"] < 0) {
        echo "Terceira Nota invalida!!!";
        exit;
    } else {
        $nota3 = $_GET["nota3"];
    }

    if ($_GET["nota4"] > 10 || $_GET["nota4"] < 0) {
        echo "Quarta Nota invalida!!!";
        exit;
    } else {
        $nota4 = $_GET["nota4"];
    }

    $media = (($nota1 + $nota2 + $nota3 + $nota4) / 4);

    echo ($media >= 6 ? "Aprovado" : "Reprovado");
?>
<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo ($numero1 > $numero2 ? "O número $numero1 é maior que $numero2" : "O número $numero2 é maior que $numero1");
?>
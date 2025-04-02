<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>37) Imprima a somatória parcial de todos os números de 1 até 100.</h1>
    <?php
        echo "while<br/>";
        $val = 0;
        $i = 1;
        while ($i <= 100) {
            $val += $i;
            echo "$val <br/>";
            $i++;
        }
        echo "For<br/>";
        $val = 0;
        for($i = 1;$i <= 100;$i++){
            $val += $i;
            echo "$val <br>";
        }
    ?>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = $_GET['numero'];
        echo ($numero == 0 ? "O número é 0." : "O número não é 0");
    ?>
</body>
</html>
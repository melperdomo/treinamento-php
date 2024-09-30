<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function IMC</title>
</head>

<body>
    <?php
    function calcularIMC(float $peso, float $altura)
    {
        echo ($peso / ($altura ** 2));
    }
    calcularIMC($peso = 94.4, $altura = 1.80);
    ?>
</body>

</html>
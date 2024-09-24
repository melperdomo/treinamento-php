<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <h3>Exercício 01</h3>
    <p>Percorra um array de números e escreva usando o (echo), apenas os números ímpares.</p>
    <?php
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($numeros as $n):
        if ($n % 2 == 0) continue;
        echo "$n ";
    endforeach;
    ?>
</body>

</html>
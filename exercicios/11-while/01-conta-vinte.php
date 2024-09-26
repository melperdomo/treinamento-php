<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <h1>Exercício 01</h1>
    <p>Exiba apenas os números pares de -20 a 20.</p>
    <?php
    $contador = -21;
    while ($contador <= 20):
        $contador++;
        if ($contador % 2 != 0) continue;
        echo $contador . " ";
    endwhile;
    ?>
</body>

</html>
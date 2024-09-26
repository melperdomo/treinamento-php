<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <h1>Exercício 02</h1>
    <p>Percorra um array de nomes e mostre-os dentro de uma lista:</p>
    <?php
    $nomes = ['Kim', 'Mel', 'Karla', 'Jake', 'Bia', 'Mi', 'Lê'];
    $contador = 0;

    while ($contador < count($nomes)):
        echo "<li>" . $nomes[$contador] . "</li>";
        $contador++;
    endwhile;
    ?>
</body>

</html>
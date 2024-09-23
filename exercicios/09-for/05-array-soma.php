<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somando Array</title>
</head>

<body>
    <h3>Exercício 02</h3>
    <p>Faça a soma de todos os números em um array e mostre o resultado final.</p>
    <?php $numeros = [60, 58, 45, 5, 30];
    $resultado = 0; ?>
    <?php for ($i = 0; $i < count($numeros); $i++): ?>
        <?php $resultado += $numeros[$i]; ?>
        <!-- <?php echo "$numeros[$i] + "; ?> jeito difícil -->
    <?php endfor ?>
    <!-- <?php echo "10 + 15 + 25 + 5 + 30 = " . $resultado; ?></br> (jeito sem jeito)-->
    <?php echo implode(' + ', $numeros) . ' = ' . $resultado; ?>
</body>

</html>
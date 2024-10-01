<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formata Number</title>
</head>

<body>
    <h1>Exercício 01</h1>
    <p>Crie uma função de formatação monetária. Em seguida, use a função para exibir os valores formatados.</p>
    <?php
    $valores = [
        1000,
        25.69,
        8599874.47,
    ];

    function formatarReal($valor)
    {
        return number_format($valor, 2, ',', '.');
    }

    foreach ($valores as $valor) {
        echo "R$ " . formatarReal($valor) . "<br>";
    }
    ?>
</body>

</html>
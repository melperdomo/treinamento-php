<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Desconto</title>
</head>

<body>
    <?php
    function calcularDesconto(float $preco, float $desconto = 0)
    {
        $total = $preco - ($preco * $desconto / 100);
        echo "R$" . $total;
    }

    $precoInicial = 180;

    echo "Sem desconto: ";
    calcularDesconto($precoInicial);
    echo "<br>";

    echo "Com 10% de desconto: ";
    calcularDesconto($precoInicial, 10);
    echo "<br>";

    echo "Com 25% de desconto: ";
    calcularDesconto($precoInicial, 25);
    echo "<br>";
    ?>

</body>

</html>
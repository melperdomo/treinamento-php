<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>

<body>
    <?php
    function calcIr(float $salario_base)
    {
        $desconto = 0;
        if ($salario_base >= 2259.21 && $salario_base <= 2826.65):
            $desconto = ($salario_base * 7.5 / 100);
        elseif ($salario_base >= 2826.66 && $salario_base <= 3751.05):
            $desconto = ($salario_base * 15 / 100);
        elseif ($salario_base >= 3751.06 && $salario_base <= 4664.68):
            $desconto = ($salario_base * 22 / 100);
        elseif ($salario_base > 4664.68):
            $desconto = ($salario_base * 27.5 / 100);
        endif;
        return $desconto;
    }
    $desconto = calcIr(5000);
    echo "O seu desconto de IR é de R$ $desconto.";
    ?>
</body>

</html>
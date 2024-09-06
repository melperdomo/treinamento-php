<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Composto</title>
</head>
<body>
        <h2>
        O valor atualizado está em R$
        <?php 
        $d = $_GET['divida'];
        $j = $_GET['juros'];
        $p = $_GET['periodo'];
        $valor_atualizado = $d * pow((1 + ($j / 100)), $p);
        echo number_format($valor_atualizado, 2, ',', '.');
        ?>
        .</h2>
</body>
</html>
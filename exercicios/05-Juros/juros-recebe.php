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
        $divida = $_GET['divida'];
        $juros = $_GET['juros'];
        $periodo = $_GET['periodo'];
        $valor_atualizado = $divida * pow((1 + ($juros / 100)), $periodo);
        echo number_format($valor_atualizado, 2, ',', '.');
        ?>
        .</h2>
</body>
</html>
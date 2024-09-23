<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Chaveado</title>
</head>
<body>
    <h3>Confirme o endereço:</h3>
    <?php 
    $endereco = [
        'rua' => 'Ana Beato Felipe',
        'numero' => '248',
        'bairro' => 'Jd São Francisco',
        'cidade' => 'Nova Odessa',
        'estado' => 'SP',
        'cep' => '13188-166'
    ];
    ?>
    <?php echo "Rua " . $endereco['rua'] . ", " . $endereco['numero'] . " - " . $endereco['bairro'] . ", " . $endereco['cidade'] . ", " . $endereco['estado'] . " -  CEP " . $endereco['cep'] . ". " ;?>
</body>
</html>
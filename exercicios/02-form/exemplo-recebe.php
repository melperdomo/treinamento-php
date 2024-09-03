<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pedido recebido com sucesso!</h1>
    <h2>Confira os detalhes:</h2>

    <div>
        Cliente: <?php echo $_GET['nome'] ?>
    </div>
    
    <div>
        Pote de <?php echo $_GET['tamanho'] ?>, tipo <?php echo $_GET['tipo'] ?>
    </div>

    <div>
        Adicionais: <?php echo implode(", ", $_GET['adicionais']) ?>
    </div>

    <div>
        Pedido recebido às <?php echo date('d/m/Y H:i:s'); ?>
    </div>
</body>
</html>
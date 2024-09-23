<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For 500</title>
    <style>
        * {
            box-sizing: border-box;
        }

        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 8px 16px;
        }

        .linha {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 10px;
        }

        .numero {
            border: 1px solid black;
            padding: 10px;
            width: 50px;
            height: 50px;
            text-align: center;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <h3>Exercício 01</h3>
    <p>Exiba os números de 0 a 500, mas somente aqueles que são divisíveis por 5.</p>
    <div class="linha">
        <?php for ($numero = 5; $numero <= 500; $numero += 5): ?>
            <span class="numero"><?php echo $numero; ?></span>
        <?php endfor; ?>
    </div>
</body>

</html>
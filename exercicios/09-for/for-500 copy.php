<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For 500</title>
    <style>
    table {
        border-collapse: collapse;
    }

    td {
        border: 1px solid black;
        padding: 8px 16px;
    }
    </style>
</head>

<body>
    <table>
        <?php for ($numero = 5; $numero <= 500; $numero+=5):?>
        <?php if ($numero % 50 == 5):?> <!-- Abre uma nova linha <tr> a cada 10 números -->
        <tr>
            <?php endif;?>
            <td><?php echo $numero;?></td>
            <?php if ($numero % 50 == 0):?> <!-- Fecha a linha <tr> a cada 10 números -->
        </tr>
        <?php endif;?>
        <?php endfor;?>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <ul>
        <?php for ($contador = 1; $contador <= 10; $contador++):?>
            <li>Top <?php echo $contador;?></li>
        <?php endfor; ?>
    </ul>
    <table>
        <?php for ($i = 1; $i <= 10; $i++):?>
            <tr>
                <td>Nome <?php echo $i;?></td>
                <td>Email <?php echo $i;?></td>
                <td>Celular <?php echo $i;?></td>
            </tr>
        <?php endfor?>
    </table>
</body>
</html>
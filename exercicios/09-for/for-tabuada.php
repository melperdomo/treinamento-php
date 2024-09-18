<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
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
    <?php for ($num_base = 0; $num_base <= 10; $num_base++):?>
    <tr>
        <?php for ($multiplicador = 0; $multiplicador <= 10; $multiplicador++):?>
            <td> <?php echo "$num_base x $multiplicador = " . ( $num_base * $multiplicador);?> </td>
        <?php endfor ?>
    </tr>
    <?php endfor ?>
    </table>
</body>
</html>
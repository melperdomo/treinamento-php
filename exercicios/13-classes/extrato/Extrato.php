<?php
include "Formatador.php"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrato</title>
</head>

<body>

    <table>
        <tr>
            <td>Saldo BR</td>
            <td><?php echo Formatador::paraReais(10000) ?></td>
        </tr>
        <tr>
            <td>Saldo EUA</td>
            <td><?php echo Formatador::paraDolar(1000000000) ?> </td>
        </tr>
        <tr>
            <td>Data</td>
            <td><?php echo Formatador::dataHoje() ?></td>
        </tr>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Array Simples</title>
</head>
<body>
    <h3>Animais Belíssimos</h3>
    <ul>
    <?php $animais = ['Pumas', 'Gatos', 'Tigres', 'Pumas', 'Racoons', 'Raposas', 'Pumas'];?>
        <?php $quantidade = count($animais);?>
        <?php for ($i = 0; $i < $quantidade; $i++):?>
            <?php if ($animais[$i] == 'Pumas') continue;?>
            <?php if ($animais[$i] == 'Racoons') break;?>
        <li> <?php echo $animais[$i];?> </li>
        <?php endfor ?>
    </ul>
    <?php $var = "duas palavras";?>
    <?php echo $var[2];?>
</body>
</html>
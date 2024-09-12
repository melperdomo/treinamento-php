<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01 de PHP</h1>
    <p>Alguns dados sobre mim, usando o comando echo:</p>
    
    <h2>Exemplo 1</h2>
    <?php $nome = "Melissa"; $idade = "32"; ?>
    <?php echo "Meu nome é $nome!."; ?></br>
    <?php echo "Há 5 anos, eu tinha " . ($idade - 5) . " anos."; ?></br>
    <?php echo "Hoje é dia " . date('d') . " do mês " . date('m') . " de " . date('Y') . ", e agora são " . date('h:i') . "."; ?></br>
    <?php echo "Em 7 dias, será " . date('d/m/Y', strtotime('+7 days')) . "."; ?></br>
    
    <h2>Exemplo 2</h2>
    <ul>
        <li>Meu nome é <?php echo "$nome!"; ?> </li>
        <li>Há 5 anos, eu tinha <?php echo ($idade - 5) . " anos."; ?> </li>
        <li>Hoje é dia <?php echo date('d'); ?> do mês <?php echo date('m'); ?> de <?php echo date('Y');?>, e agora são <?php echo date('h:i');?>.</li>
        <li>Em 7 dias, será <?php echo date('d/m/Y', strtotime('+7 days'));?>.</li>
    </ul>
</body>
</html>
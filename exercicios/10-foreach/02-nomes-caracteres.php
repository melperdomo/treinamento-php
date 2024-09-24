<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <h3>Exercício 02</h3>
    <p>Conte quantos nomes dentro do array, possuem 5 caracteres:</p>

    <?php
    $nomes = [
        "Alice",
        "Bob",
        "Charlie",
        "David",
        "Eve",
        "Frank",
        "Grace",
        "Hannah",
        "Ivy",
        "Jack",
        "Kara",
        "Liam",
        "Mia",
        "Noah",
        "Olivia",
        "Paul",
        "Quinn",
        "Ryan",
        "Sophia",
        "Tom"
    ];
    $cont = 0;
    $caracter = 5;
    foreach ($nomes as $n):
        if (strlen($n) <> $caracter) continue;
        $cont += 1;
        echo "$n ";
    endforeach;
    ?>
    <p> Há <?php echo $cont;?> nomes com <?php echo $caracter;?> letras.</p>
</body>

</html>
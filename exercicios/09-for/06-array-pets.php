<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Array Pets</title>
</head>

<body>
    <h3>Exercício 02</h3>
    <p>Encontre a posição do Carrocho no array.</p>
    <?php
    $pets = ['Racoon', 'Gato', 'Ouriço', 'Carrocho', 'Raposa'];
    $posicao = 0;
    for ($i = 0; $i < count($pets); $i++):
        if ($pets[$i] == 'Carrocho'):
            $posicao = $i;
            break; // ele encontra o carrocho e para.
        endif;
    endfor;
    echo "O Carrocho está na posição $posicao.";
    ?>
</body>

</html>
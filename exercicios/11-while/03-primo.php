<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <h1>Exercício 03</h1>
    <p>Monte um formulário que recebe um número inteiro qualquer e verifica se este número é primo ou não.</p>

    <form action="" method="GET">
        <label for="numero">
            Digite um número: <input type="number" name="number" id="idnumber" step="1" required>
        </label>
        <button type="submit">Verificar</button>
    </form>
    <?php
    $numero = $_GET['number'];
    $divisor = 2;
    $ehprimo = true;
    while ($divisor < $numero):
        // echo ($numero % $divisor);
        if ($numero % $divisor == 0):
            $ehprimo = false;
            break;
        endif;
        $divisor++;
    endwhile;
    if ($ehprimo == false): 
        echo "O $numero não é primo.";
        elseif ($ehprimo == true):
            echo "O $numero é primo.";
        endif;
    ?>
</body>

</html>
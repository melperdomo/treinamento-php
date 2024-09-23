<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Letras</title>
</head>

<body>
    <h3>Exercício 04</h3>
    <p>Crie um formulário que recebe um texto e uma letra. Mostre quantas vezes a letra aparece dentro do texto.</p>
    <form action="" method="GET">
        <label for="texto">Insira um texto:</label>
        <textarea name="texto" id="idtexto" rows="4" cols="50" required></textarea><br><br>

        <label for="letra">Digite uma letra:</label>
        <input type="text" name="letra" id="idletra" maxlength="1" required><br><br>

        <input type="reset" value="Apagar">
        <input type="submit" value="Contar Letra"><br><br>
    </form>

    <?php $texto = @$_GET['texto'];
    $letra = @$_GET['letra'];
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++):
        if ($texto[$i] == $letra):
            $contador++;
        endif;
    endfor;
    echo "A letra $letra aparece no texto $contador vezes.";
    ?>
</body>

</html>
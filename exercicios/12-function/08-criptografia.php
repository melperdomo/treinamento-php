<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
</head>

<body>
    <h1>Exercício 03</h1>
    <p>Crie uma função que recebe um texto e retorna esse mesmo texto porém criptografado, trocando as letras:</p>
    <form>
        <label for="texto">Digite um texto:</label>
        <textarea name="texto" id="texto" rows="8" cols="50" required></textarea>
        <button type="submit">Criptografar</button>
    </form>

    <!-- A função deve receber um texto e retornar ele criptografado.
    Um texto é um array.
    Preciso usar o for/foreach para percorrer o array.
    Usar o else if ou switch para trocar as letras.
    Retornar o texto trocado. -->

    <?php
    function criptografar(string $texto): string
    {
        for ($i = 0; $i < strlen($texto); $i++):
            if ($texto[$i] == "e" || $texto[$i] == "E"):
                $texto[$i] = "U";
            elseif ($texto[$i] == "i" || $texto[$i] == "I"):
                $texto[$i] = "A";
            elseif ($texto[$i] == "o" || $texto[$i] == "O"):
                $texto[$i] = "E";
            elseif ($texto[$i] == "u" || $texto[$i] == "U"):
                $texto[$i] = "I";
            elseif ($texto[$i] == "p" || $texto[$i] == "P"):
                $texto[$i] = "B";
            elseif ($texto[$i] == "b" || $texto[$i] == "B"):
                $texto[$i] = "P";
            elseif ($texto[$i] == "a" || $texto[$i] == "A"):
                $texto[$i] = "O";
            endif;
        endfor;
        return $texto;
    }
    echo criptografar($_GET['texto']);
    ?>
</body>

</html>
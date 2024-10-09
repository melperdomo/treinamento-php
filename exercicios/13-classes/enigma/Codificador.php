<?php
include "Enigma.php";
$texto_decifrado = @$_GET['textodecifrado'] ?? '';
$texto_cifrado = @$_GET['textocifrado'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enigma</title>
</head>

<body>
    <h1>Exercício 02</h1>
    <p>Crie duas funções para cifrar e decifrar um texto.</p>
    <form method="get">
        <h2><label for="texto">Digite um texto para criptografar:</label><br></h2>
        <textarea name="textodecifrado" id="idtextodecifrado" rows="10" cols="40"></textarea>
        <button type="submit">Criptografar</button>
    </form>
    <fieldset>
        <h3>Aqui está o texto criptografado:</h3><br>
        <?php echo Enigma::criptografar($texto_decifrado);?>
    </fieldset>
    <p><?php ?></p><br>

    <form method="get">
        <h2><label for="texto">Digite um texto criptografado para decifrar:</label><br></h2>
        <textarea name="textocifrado" id="idtextocifrado" rows="10" cols="40"></textarea>
        <button type="submit">Decifrar</button>
    </form>
    <fieldset>
        <h3>Esse é o texto original:</h3><br>
        <?php echo Enigma::decifrar($texto_cifrado);?>
    </fieldset>
    <p><?php ?></p>
</body>

</html>
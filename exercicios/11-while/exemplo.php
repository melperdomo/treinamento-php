<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <h1>Exercício 01</h1>
    <?php
    $contador = 101;
    while ($contador <= 100):
        echo $contador . " ";
        $contador += 10;
    endwhile;
    ?>
    <br><br>

    <?php
    $contaoutro = 101;
    do {
        echo $contaoutro . " ";
        $contaoutro += 10;
    } while ($contaoutro <= 100);
    ?>
    <!--
    O while lê a condição primeiro, para rodar o código.
    O do while roda primeiro, antes de ler a condição.
    Continue e break funcionam em todos os repetidores.
    !-->
    <br><br>

    <?php 
    $numero = 0;
    while ($numero <= 10):
        $numero += 1;
        if ($numero == 3) continue;        
        if ($numero == 7) break;
        echo $numero . " ";
    endwhile;
    ?>
</body>

</html>
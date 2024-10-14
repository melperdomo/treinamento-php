<?php
include "jogador.php";

$j1 = new Jogador;
$j1->nome = 'Lucian';

$j2 = new Jogador;
$j2->nome = 'Mel';

$contador = 1;
while ($contador <= 3):
    $j1->jogarDados();
    $j2->jogarDados();
    $contador += 1;
endwhile;

echo $j1->nome . " ganhou " . $j1->pontos;
echo '<br>';
echo $j2->nome . " ganhou " . $j2->pontos;
echo '<br>';

if ($j1->pontos > $j2->pontos) {
    echo "Quem venceu foi " . $j1->nome . ".";
} else if ($j1->pontos < $j2->pontos) {
    echo "Quem venceu foi " . $j2->nome . ".";
} else {
    echo "Deu empate.";
}
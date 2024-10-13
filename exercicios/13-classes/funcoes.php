<?php 

$animais_1 = ['porco', 'gato', 'carrocho', 'maritaca'];
$animais_2 = ['maritaca', 'leão', 'gato', 'tigre'];

$animais = array_merge($animais_2, $animais_1);
// var_dump($animais);

// $animais = array_diff($animais_1, $animais_2);
// var_dump($animais);
// array_diff, considera apenas o 1º array e remove dele os valores repetidos que há nos outros.

// $animais = array_unique($animais);
// var_dump($animais);
// array_unique, remove os valores repetidos de todos os arrays, mostrando o valor apenas uma vez.

$duplicates = array_diff_key($animais, array_unique($animais));
var_dump($duplicates);
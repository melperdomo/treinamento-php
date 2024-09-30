<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Pokemons</title>
</head>

<body>
    <?php
    $pokemons = [
        "Pikachu",
        "Charmander",
        "Bulbasaur",
        "Squirtle",
        "Jigglypuff",
        "Meowth",
        "Psyduck",
        "Snorlax",
        "Eevee",
        "Gengar"
    ];

    function exibirPokemonAleatorio($pokemons)
    {
        $index_maximo = count($pokemons) - 1;
        $index_aleatorio = rand(0, $index_maximo);
        $pokemon_aleatorio = $pokemons[$index_aleatorio];
        echo $pokemon_aleatorio;
    }

    echo "Talvez você conheça o ";
    exibirPokemonAleatorio($pokemons);
    echo " ou até mesmo o ";
    exibirPokemonAleatorio($pokemons);
    echo ", mas você já ouviu falar em ";
    exibirPokemonAleatorio($pokemons);
    echo "?";
    ?>

</body>

</html>
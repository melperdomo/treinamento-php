<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Signos</title>
</head>

<body>
    <h1>Reforço Escolar Pós Palestra de Coach</h1>
    <p>Reescreva a função dos tipos sanguíneos usando características dos signos.</p>

    <?php
    $caracteristicasSignos = [
        "Áries" => ["Corajosa", "Impulsiva", "Líder nata", "Competitiva", "Entusiasmada"],
        "Touro" => ["Persistente", "Confiável", "Paciente", "Apreciadora do conforto", "Teimosa"],
        "Gêmeos" => ["Comunicativa", "Versátil", "Curiosa", "Inquieta", "Racional"],
        "Câncer" => ["Emocional", "Protetora", "Leal", "Intuitiva", "Sensível"],
        "Leão" => ["Confiante", "Carismática", "Criativa", "Generosa", "Orgulhosa"],
        "Virgem" => ["Perfeccionista", "Prática", "Organizada", "Crítica", "Trabalhadora"],
        "Libra" => ["Diplomática", "Charmosa", "Justa", "Indecisa", "Sociável"],
        "Escorpião" => ["Intensa", "Misteriosa", "Apaixonada", "Determinada", "Vingativa"],
        "Sagitário" => ["Aventureira", "Otimista", "Honesta", "Impulsiva", "Independente"],
        "Capricórnio" => ["Ambiciosa", "Responsável", "Disciplinada", "Realista", "Conservadora"],
        "Aquário" => ["Inovadora", "Independente", "Humanitária", "Rebelde", "Visionária"],
        "Peixes" => ["Empática", "Sonhadora", "Intuitiva", "Sensível", "Altruísta"],
    ];
    function verificarSolar(string $signo, array $caracteristicasSignos): array
    {
        return $caracteristicasSignos[$signo];
    }

    function verificarAsc(string $ascendente, array $caracteristicasSignos): array
    {
        return $caracteristicasSignos[$ascendente];
    }

    $signo = "Libra";
    $ascendente = "Virgem";
    $caracteristicaSolar = verificarSolar($signo, $caracteristicasSignos);
    $caracteristicaAsc = verificarAsc($ascendente, $caracteristicasSignos);
    echo "A pessoa de $signo costuma ser:<br>" . implode(", ", $caracteristicaSolar) . ". <br><br>";
    echo "Com o ascendente em $ascendente também aparenta ser:<br>" . implode(", ", $caracteristicaAsc) . ". <br>"
    ?>
</body>

</html>
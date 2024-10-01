<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Sanguíneo</title>
</head>

<body>
    <h1>Exercício 02</h1>
    <p>Crie uma função que recebe o tipo sanguíneo do doador e o tipo sanguíneo do recebedor e retorna se eles são compátiveis.</p>

    <?php    
    function verificarCompat(string $tipoSanguineoDoador):array
    {
        $compatibilidadeDoador = [
            "A+" => ['A+', 'AB+'],
            "A-" => ['A-', 'A+', 'AB-', 'AB+'],
            "B+" => ['B+', 'AB+'],
            "B-" => ['B-', 'B+', 'AB-', 'AB+'],
            "AB+" => ['AB+'],
            "AB-" => ['AB-', 'AB+'],
            "O+" => ['O+', 'A+', 'B+', 'AB+'],
            "O-" => ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB-', 'AB+'],
        ];
        return $compatibilidadeDoador[$tipoSanguineoDoador];
    }
    $tipoSanguineoDoador = "O-";
    $receptores = verificarCompat($tipoSanguineoDoador);
    echo "O tipo sanguíneo $tipoSanguineoDoador pode doar para " . implode(", ", $receptores) . ".";
    ?>
</body>

</html>
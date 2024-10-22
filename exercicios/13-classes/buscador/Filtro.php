<?php
include "Buscador.php";
$marca = @$_GET['marca'] ?? '';
$modelo = @$_GET['modelo'] ?? '';
$ano_min = intval(@$_GET['ano-min']) ?? 0;
$ano_max = intval(@$_GET['ano-max']) ?? 0;
$categoria = @$_GET['categoria'] ?? '';
$preco_min = floatval(@$_GET['preco-min']) ?? 0;
$preco_max = floatval(@$_GET['preco-max']) ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="conteiner">
        <div class="buscador">
            <h1>Filtro de Carros</h1>
            <p>Construa um filtro de carros que faz busca por marca, modelo, ano, categoria e preço.</p>
            <form class="buscador-opcoes">
                
            <label for="marca">Marca </label>
                <select class="buscador-item" name="marca" id="marca">
                    <option value=""></option>
                    <option value="Toyota" <?php if ($marca == "Toyota") echo "selected" ?>>Toyota</option>
                    <option value="Volkswagen" <?php if ($marca == "Volkswagen") echo "selected" ?>>Volkswagen</option>
                    <option value="Honda" <?php if ($marca == "Honda") echo "selected" ?>>Honda</option>
                    <option value="Chevrolet" <?php if ($marca == "Chevrolet") echo "selected" ?>>Chevrolet</option>
                    <option value="Ford" <?php if ($marca == "Ford") echo "selected" ?>>Ford</option>
                    <option value="Renault" <?php if ($marca == "Renault") echo "selected" ?>>Renault</option>
                    <option value="Fiat" <?php if ($marca == "Fiat") echo "selected" ?>>Fiat</option>
                    <option value="Jeep" <?php if ($marca == "Jeep") echo "selected" ?>>Jeep</option>
                    <option value="Hyundai" <?php if ($marca == "Hyundai") echo "selected" ?>>Hyundai</option>
                    <option value="Nissan" <?php if ($marca == "Nissan") echo "selected" ?>>Nissan</option>
                </select>
                
                <label for="modelo">Modelo </label>
                <select class="buscador-item" name="modelo" id="modelo">
                    <option value=""></option>
                    <option value="Corolla" <?php if ($modelo == "Corolla") echo "selected" ?>>Corolla</option>
                    <option value="Civic" <?php if ($modelo == "Civic") echo "selected" ?>>Civic</option>
                    <option value="Gol" <?php if ($modelo == "Gol") echo "selected" ?>>Gol</option>
                    <option value="Onix" <?php if ($modelo == "Onix") echo "selected" ?>>Onix</option>
                    <option value="EcoSport" <?php if ($modelo == "EcoSport") echo "selected" ?>>EcoSport</option>
                    <option value="Duster" <?php if ($modelo == "Duster") echo "selected" ?>>Duster</option>
                    <option value="Strada" <?php if ($modelo == "Strada") echo "selected" ?>>Strada</option>
                    <option value="Compass" <?php if ($modelo == "Compass") echo "selected" ?>>Compass</option>
                    <option value="HB20" <?php if ($modelo == "HB20") echo "selected" ?>>HB20</option>
                    <option value="Kicks" <?php if ($modelo == "Kicks") echo "selected" ?>>Kicks</option>
                </select>
                
                <label for="ano-min">Ano Mínimo </label>
                <input class="buscador-item-number" type="number" id="ano-min" name="ano-min" step="1" min="1990" max="2024" placeholder="1990" value="<?php echo $ano_min ? $ano_min: ''?>">
                
                <label for="ano-max">Ano Máximo </label>
                <input class="buscador-item-number" type="number" id="ano-max" name="ano-max" step="1" min="1990" max="2024" placeholder="2024" value="<?php echo $ano_max ? $ano_max: ''?>">
                
                <label for="categoria">Categoria </label>
                <select class="buscador-item" name="categoria" id="categoria">
                    <option value=""></option>
                    <option value="Sedan" <?php if ($categoria == "Sedan") echo "selected" ?>>Sedan</option>
                    <option value="Hatch" <?php if ($categoria == "Hatch") echo "selected" ?>>Hatch</option>
                    <option value="SUV" <?php if ($categoria == "SUV") echo "selected" ?>>SUV</option>
                    <option value="Picape" <?php if ($categoria == "Picape") echo "selected" ?>>Picape</option>
                </select>
                
                <label for="preco-min">Preço Mínimo </label>
                <input class="buscador-item-number" type="number" id="preco-min" name="preco-min" step="0.5" min="0" placeholder="20000" value="<?php echo $preco_min ? $preco_min: '' ?>">
                <!-- Isso é um ternário, ele faz o echo do preco min, e se o valor for verdadeiro (se houver valor) ele pega o preço min, se não, ele pega nada. -->
                
                <label for="preco-max">Preço Máximo </label>
                <input class="buscador-item-number" type="number" id="preco-max" name="preco-max" step="0.5" min="0" placeholder="150000" value="<?php echo $preco_max ? $preco_max: '' ?>">
                
                <button type="submit">Buscar</button>
        </form>
        </div>
        <div class="buscador">
            <?php $carros = Buscador::filtrar($marca, $modelo, $categoria, $preco_min, $preco_max, $ano_min, $ano_max) ?>
            <table class="buscador-resultados">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Categoria</th>
                    <th class="col-preco">Preço</th>
                </tr>
                <?php foreach ($carros as $carro): ?>
                    <tr>
                        <td><?php echo $carro['marca'] ?></td>
                        <td><?php echo $carro['modelo'] ?></td>
                        <td><?php echo $carro['ano'] ?></td>
                        <td><?php echo $carro['categoria'] ?></td>
                        <td class="col-preco"><?php echo "R$ " . number_format($carro['preco'], 2, ',','.')?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>
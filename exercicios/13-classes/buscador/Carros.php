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
                    <option value="Toyota">Toyota</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Honda">Honda</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Ford">Ford</option>
                    <option value="Renault">Renault</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Nissan">Nissan</option>
                </select>

                
                <label for="modelo">Modelo </label>
                <select class="buscador-item" name="modelo" id="modelo">
                    <option value=""></option>
                    <option value="Corolla">Corolla</option>
                    <option value="Civic">Civic</option>
                    <option value="Gol">Gol</option>
                    <option value="Onix">Onix</option>
                    <option value="EcoSport">EcoSport</option>
                    <option value="Duster">Duster</option>
                    <option value="Strada">Strada</option>
                    <option value="Compass">Compass</option>
                    <option value="HB20">HB20</option>
                    <option value="Kicks">Kicks</option>
                </select>
                
                
                <label for="ano-min">Ano Mínimo </label>
                <input class="buscador-item-number" type="number" id="ano-min" name="ano-min" step="1" min="1990" max="2024" placeholder="1990">
                
                
                <label for="ano-max">Ano Máximo </label>
                <input class="buscador-item-number" type="number" id="ano-max" name="ano-max" step="1" min="1990" max="2024" placeholder="2024">
                
                <label for="categoria">Categoria </label>
                <select class="buscador-item" name="categoria" id="categoria">
                    <option value=""></option>
                    <option value="Sedan">Sedan</option>
                    <option value="Hatch">Hatch</option>
                    <option value="SUV">SUV</option>
                    <option value="Picape">Picape</option>
                </select>
                
                
                <label for="preco-min">Preço Mínimo </label>
                <input class="buscador-item-number" type="number" id="preco-min" name="preco-min" step="0.5" min="0" placeholder="20000">
                
                <label for="preco-max">Preço Máximo </label>
                <input class="buscador-item-number" type="number" id="preco-max" name="preco-max" step="0.5" min="0" placeholder="150000">
                
                <button type="submit"> Buscar </button>
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
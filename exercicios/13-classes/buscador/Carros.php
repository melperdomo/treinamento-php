<?php
include "Buscador.php";
$marca = @$_GET['marca'] ?? '';
$modelo = @$_GET['modelo'] ?? '';
$anoMin = @$_GET['ano-min'] ?? '';
$anoMax = @$_GET['ano-max'] ?? '';
$categoria = @$_GET['categoria'] ?? '';
$precoMin = @$_GET['preco-min'] ?? '';
$precoMax = @$_GET['preco-max'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>

<body>
    <h1>Exercício 03</h1>
    <p>Só por Deus</p>
    <form>
        <label for="marca">Marca </label>
        <select name="marca" id="marca">
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
        <br>

        <label for="modelo">Modelo </label>
        <select name="modelo" id="modelo">
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
        <br>

        <label for="ano-min">Ano Mínimo </label>
        <input type="number" id="ano-min" name="ano-min" step="1" min="1990" max="2024" placeholder="1990">
        <br>

        <label for="ano-max">Ano Máximo </label>
        <input type="number" id="ano-max" name="ano-max" step="1" min="1990" max="2024" placeholder="2024">
        <br>

        <label for="categoria">Categoria </label>
        <select name="categoria" id="categoria">
            <option value="Sedan">Sedan</option>
            <option value="Hatch">Hatch</option>
            <option value="SUV">SUV</option>
            <option value="Picape">Picape</option>
        </select>
        <br>

        <label for="preco-min">Preço Mínimo </label>
        <input type="number" id="preco-min" name="preco-min" step="0.500" min="0">
        <br>

        <label for="preco-max">Preço Máximo </label>
        <input type="number" id="preco-max" name="preco-max" step="1" min="0">
        <br>

        <button type="submit"> Buscar </button>
    </form>
    <h2>Que tal estes?</h2>
    <div>
        <?php $marcasCarros = Buscador::filtrarMarca($marca) ?>
        <table>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Categoria</th>
                <th>Preço</th>
            </tr>
            <?php foreach ($marcasCarros as $carro): ?>
                <tr>
                    <td><?php echo $carro['marca'] ?></td>
                    <td><?php echo $carro['modelo'] ?></td>
                    <td><?php echo $carro['ano'] ?></td>
                    <td><?php echo $carro['categoria'] ?></td>
                    <td><?php echo $carro['preco'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>
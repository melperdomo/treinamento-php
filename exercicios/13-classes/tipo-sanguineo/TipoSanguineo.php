<?php
include "Analisador.php";
$tipoSang = @$_GET['tiposanguineo'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compatibilidade Doação</title>
</head>

<body>
    <h1>Análise de Compatibilidade Sanguínea</h1>
    <p>Selecione o seu tipo sanguíneo e verifique a compatibilidade.</p>
    <form method="GET">
        <label for="tiposanguineo">Tipo sanguíneo</label>
        <select name="tiposanguineo" id="idtiposang">
            <option value=""></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <button type="submit">Analisar</button>
    </form>
    <p>
        O tipo sanguíneo <?php echo $tipoSang ?> pode doar para pessoas com sangue <?php echo implode(" | ", Analisador::doarPara($tipoSang)); ?>
    </p>
    <p>
        E pode receber de <?php echo implode(" | ", Analisador::recebeDe($tipoSang)); ?>
    </p>
</body>

</html>
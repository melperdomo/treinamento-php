<?php 
include "Analisador.php";
$tipoSang = $_GET("tiposanguineo");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compatibilidade Doação</title>
</head>
<body>
    <form>
    <label for="tiposanguineo">Tipo sanguíneo</label>
    <input type="select" name="tiposanguineo" id="idtiposang">
    <button type="submit">Analisar</button>
    </form>
    <p>
        O tipo sanguíneo <?php $tipoSang?> <?php echo Analisador::doarPara($tipoSang)?>;
    </p>
    <p>
        E pode receber de <?php echo Analisador::recebeDe($tipoSang)?>;
    </p>
</body>
</html>
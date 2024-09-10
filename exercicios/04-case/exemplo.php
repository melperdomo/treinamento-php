<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo CASE</title>
</head>
<body>
    <fieldset>
        <legend>Escolha sua região</legend>
        <form action="">
            <select name="regiao">
                <option value=""></option>
                <option value="CO">Centro-Oeste</option>
                <option value="NE">Nordeste</option>
                <option value="N">Norte</option>
                <option value="SE">Sudeste</option>
                <option value="S">Sul</option>
            </select>
            <button type="submit">Calcular frete</button>
        </form>
    </fieldset>
    <fieldset>
        <legend>Frete</legend>
        <?php
        switch ($_GET['regiao'] ?? ''):
            case "S":
                echo "Sul: R$ 12,50";
            break;
            case "SE":
                echo "Sudeste: R$ 10,00";
            break;
            case "CO":
                echo "Centro-oeste: R$ 15,00";
            break;
            case "NE":
                echo "Nordeste: R$ 17,50";
            break;
            case "N":
                echo "Norte: 20,00";
            break;
            default:
                echo "Escolha uma região";
            break;
        endswitch;
        ?>
    </fieldset>
</body>
</html>
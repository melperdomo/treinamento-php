<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo CASE</title>
</head>
<body>
    <fieldset>
        <legend>Digite o valor da compra</legend>
        <form action="">
            <input type="number" name="valor" id="valor" step="0.01" placeholder="0,00">
    </fieldset>
    <fieldset>
        <legend>Escolha a forma de pagamento</legend>
            <select name="pagamento">
                <option value=""></option>
                <option value="pix">Pix (10% OFF)</option>
                <option value="boleto">Boleto (5% OFF)</option>
                <option value="vista">Crédito a vista (Sem Juros)</option>
                <option value="prazo">Crédito a prazo (Com Juros)</option>
            </select>
            <button type="submit">Calcular Total</button>
        </form>
    </fieldset>
    <fieldset>
        <legend>Total</legend>
        <?php
        $total = $_GET['valor'] ?? '0';
        switch ($_GET['pagamento'] ?? ''):
            case "pix":
                $total -= $total / 10;
                echo "Total: R$" . number_format($total, 2, ',', '.');
            break;
            case "boleto":
                $total -= $total * 0.05;
                echo "Total: R$" . number_format($total, 2, ',', '.');
            break;
            case "vista":
                echo "Total: R$" . number_format($total, 2, ',', '.');
            break;
            case "prazo":
                $total += $total * 0.10;
                echo "Total: R$" . number_format($total, 2, ',', '.');
            break;
        endswitch;
        ?>
    </fieldset>
</body>
</html>
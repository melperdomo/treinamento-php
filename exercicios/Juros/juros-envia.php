<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Composto</title>
</head>
<body>
    <header>
        <h1>Calcule o juros da sua dívida.</h1>
    </header>
    <main>
        <form action="/Juros/juros-recebe.php" method="GET">
            <p>
                <label for="iddivida">Informe o valor inicial da dívida: R$</label>
                <input type="number" name="divida" id="iddivida" step="0.01" placeholder="0000.00" required>
            </p>
        
            <p>
                <label for="idjuros">Informe o percentual de juros:</label>
                <input type="number" name="juros" id="idjuros" required> %
            </p>
        
            <p>
                <label for="idperiodo">Informe o período em meses:</label>
                <input type="number" name="periodo" id="idperiodo" required> meses
            </p>

            <!-- 
            divida x (1 + (juros / 100))^período
            -->
            
            <button type="reset">Apagar Dados</button>
            <button type="submit">Enviar Dados</button>
        </form>
    </main>
</body>
</html>
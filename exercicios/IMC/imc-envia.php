<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
</head>
<body>
    <header>
        <h1>Calcule o seu IMC!</h1>
        <h2>E tenha mais uma certeza de que precisa voltar pra academia.</h2>
    </header>
    <main>
        <form action="/IMC/imc-recebe.php" method="GET">
            <p>
                <label for="peso">Qual é o seu peso?</label>
                <input type="number" name="peso" id="peso" step="0.01" placeholder="50.5" required> Kg
            </p>
        
            <p>
                <label for="altura">Informe a sua altura:</label>
                <input type="number" name="altura" id="altura" step="0.01" placeholder="1.60" required> cm
            </p>
        
            <button type="submit">Enviar Dados</button>
        </form>
    </main>
</body>
</html>
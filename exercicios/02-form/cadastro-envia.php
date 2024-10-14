<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <style>
                * {
            margin: 0;
            padding: 10px;
            font-family: Tahoma, sans-serif;
        }
        
        body {
            background: url('/imagens/darkstar_bg.png') no-repeat center;
            background-size: cover;
            line-height: 1.5em;
        }

        .dados {
            background-color: whitesmoke;
            width: 40%;
            margin: auto;
            padding: auto;
            border-radius: 15px;
            box-shadow: 2px 2px 5px black;
        }
        
        h1 {
            background-color: #FCE592;
            border-radius: 15px;
            font-size: 1.5em;
            text-align: center;
            color: #D15D64;
        }

        h2 {
            font-size: 1em;
            text-align: center;
        }

        .preferencias {
            font-size: small;
        }

        .botoes {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
    </style>
</head>
<body>
    <div class="dados">
        <h1>PHP - Exercício 03</h1>
        <h2>Complete o seu cadastro:</h2>
        <form action="/02-form/cadastro-recebe.php" method="GET">
        
            <p>
                <label>Nome Completo</label>
                    <input type="text" name="nome" id="nome" minlength="3" maxlength="30" placeholder="Nome completo" required>
            </p>
        
            <p>
                <label>Data de Nascimento</label>
                    <input type="date" name="nascimento" id="nascimento" required>
            </p>
        
            <p>
                <label for="sexo">Sexo</label><br>
                <label>
                    <input type="radio" name="sexo" id="sexo-masculino" value="Masculino">
                Masculino
                </label><br>
        
                <label>
                    <input type="radio" name="sexo" id="sexo-feminino" value="Feminino">
                Feminino
                </label>
            </p>
        
            <p>
                <label>Celular</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="(00)00000-0000" minlength="10" maxlength="15" required>
            </p>
            <p>
                <label>E-mail Corporativo</label>
                    <input type="email" name="email" id="email" placeholder="nome@exemplo.com" required>
            </p>
            <p class="preferencias">
                <label>
                    <input type="checkbox" name="preferencias[]" id="preferencias" value="Receber emails."> Aceito receber e-mails com informações importantes.<br>
                </label>
        
                <label>
                    <input type="checkbox" name="preferencias[]" id="preferencias" value="Receber SMS.">
                     Aceito receber SMS com informações importantes.<br>
                </label>
        
                <label>
                    <input type="checkbox" name="preferencias[]" id="preferencias" value="Ser contatado via WhatsApp."> Aceito ser contatado via WhatsApp sobre informações importantes.<br>
                </label>
            </p>
    </div>
    
        <div class="botoes">
            <button type="reset">Apagar Dados</button>
            <button type="submit">Enviar Dados</button>
        </div>
    
    </form>
</body>
</html>
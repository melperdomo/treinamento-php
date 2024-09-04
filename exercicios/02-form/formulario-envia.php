<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>
<body>
    <h1>Complete o seu cadastro:</h1>
    <form action="/02-form/formulario-recebe.php" method="GET">
        
        <p>
            <label>Nome Completo</label>
                <input type="text" name="nome" id="nome" minlength="3" maxlength="30" placeholder="Nome completo" required>
        </p>
        
        <p>
            <label>Data de Nascimento</label>
                <input type="date" name="nascimento" id="nascimento" required>
        </p>
        
        <p>
            <label>Gênero
                <input type="radio" name="sexo" id="sexo-masculino" value="Masculino">
            Masculino
            </label>
            
            <label>
                <input type="radio" name="sexo" id="sexo-feminino" value="Feminino">
            Feminino
            </label>
        </p>
        
        <p>
            <label>Celular</label>
                <input type="tel" name="telefone" id="telefone" placeholder="(00)00000-0000" minlength="10" maxlength="11" required>
        </p>

        <p>
            <label>E-mail Corporativo</label>
                <input type="email" name="email" id="email" placeholder="nome@exemplo.com" required>
        </p>

        <p>
            <label>
                <input type="checkbox" name="preferencias[]" id="preferencias" value="Receber emails.">
                <span> Aceito receber e-mails com informações importantes.</span><br>
            </label>
            
            <label>
                <input type="checkbox" name="preferencias[]" id="preferencias" value="Receber SMS.">
                <span> Aceito receber SMS com informações importantes.</span><br>
            </label>
                
            <label>
                <input type="checkbox" name="preferencias[]" id="preferencias" value="Ser contatado via WhatsApp.">
                 Aceito ser contatado via WhatsApp sobre informações importantes.<br>
            </label>
        </p>
    
        <button type="reset">Apagar Dados</button>
        <button type="submit">Enviar Dados</button>
    </form>
</body>
</html>
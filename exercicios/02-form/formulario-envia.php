<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>
<body>
    <h1>Complete o seu cadastro:</h1>
    <form action="/exercicios/02-form/formulario-recebe.php">
        
        <p>
            <label>Nome Completo</label>
                <input type="text" name="nome" id="inome" minlength="3" maxlength="30" placeholder="Nome completo" autocomplete="name" required>
        </p>
        
        <p>
            <label>Data de Nascimento</label>
                <input type="date" name="nascimento" id="inascimento" required>
        </p>
        
        <p>
            <label>Gênero</label>
                <input type="radio" name="sexo" id="sexo" required>
                <span>Masculino</span>
            
            <label></label>
                <input type="radio" name="sexo" id="sexo" required>
                <span>Feminino</span>
        </p>
        
        <p>
            <label>Celular</label>
                <input type="tel" name="telefone" id="itelefone" placeholder="(00)00000-0000" minlength="10" maxlength="11" required>
        </p>

        <p>
            <label></label>
                <input type="checkbox" name="opcoes-contato[]" id="iopcoes-contato" value="email">
                <span>Aceito receber e-mails com informações importantes.</span><br>
            
            <label></label>
                <input type="checkbox" name="opcoes-contato[]" id="iopcoes-contato" value="sms">
                <span>Aceito receber SMS com informações importantes.</span><br>

                
            <label></label>
                <input type="checkbox" name="opcoes-contato[]" id="iopcoes-contato" value="whatsapp">
                Aceito receber WhatsApp com informações importantes.<br>
        </p>
    
        <button type="reset">Apagar Dados</button>
        <button type="submit">Enviar Dados</button>
    </form>
</body>
</html>
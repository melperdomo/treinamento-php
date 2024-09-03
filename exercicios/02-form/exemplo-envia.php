<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Monte seu açaí</h1>
    
    <form action="/02-form/exemplo-recebe.php">
    
        <label>Seu nome: </label>
        <input type="text" name="nome" minlength="3" maxlength="32" required>
        <br><br>
        
        <label>Tamanho: </label>
        <select name="tamanho" required>
            <option></option>
            <option>300ml</option>
            <option>600ml</option>
            <option>900ml</option>
            <option>1200ml</option>
        </select>
        <br><br>

        <label>Tipo: </label>
        <label>
            <input type="radio" name="tipo" value="original" required>
            <span>Original</span>
        </label>
        <label>
            <input type="radio" name="tipo" value="guarana" required>
            <span>Com Guaraná</span>
        </label>
        <label>
            <input type="radio" name="tipo" value="premium" required>
            <span>Premium</span>
        </label>
        <label>
            <input type="radio" name="tipo" value="zero" required>
            <span>Zero Açúcar</span>
        </label>
        <br><br>

        <label>Adicionais: </label>
        <label>
            <input type="checkbox" name="adicionais[]" value="morango">
            <span>🍓 Morango </span>
        </label>

        <label>
            <input type="checkbox" name="adicionais[]" value="banana">
            <span>🍌 Banana </span>
        </label>

        <label>
            <input type="checkbox" name="adicionais[]" value="abacaxi">
            <span>🍍 Abacaxi </span>
        </label>

        <label>
            <input type="checkbox" name="adicionais[]" value="kiwi">
            <span>🥝 Kiwi </span>
        </label>
        <br><br>

        <button type="reset">Limpar Campos</button>
        <button type="submit">Enviar Pedido</button>
        
    </form>
</body>
</html>
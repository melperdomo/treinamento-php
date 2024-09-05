<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro realizado com sucesso!</h1>
    <h2>Confira os seus dados:</h2>

    <div>
        Nome Completo: <?php echo $_GET['nome']; ?>
    </div>

    <div>
        Data de Nascimento: <?php echo $_GET['nascimento'];?>
    </div>
    
    <div>
        Sexo: <?php echo $_GET['sexo'];?>
    </div>
    
    <div>
        Celular: <?php echo $_GET['telefone'];?>
    </div>
    
    <div>
        E-mail: <?php echo $_GET['email'];?>
    </div>
    
    <div>
        Preferências:</br><?php echo implode("</br>", $_GET['preferencias']);?>
    </div>
    
</body>
</html>
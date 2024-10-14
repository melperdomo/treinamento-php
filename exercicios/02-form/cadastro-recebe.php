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

        div {
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
    </style>
</head>

<body>
    <div>
        <h1>Cadastro realizado com sucesso!</h1>
        <h2>Confira os seus dados:</h2>

        <p>
            <strong>Nome Completo:</strong> <?php echo @$_GET['nome']; ?>
        </p>
        <p>
            <strong>Data de Nascimento:</strong> <?php echo @$_GET['nascimento']; ?>
        </p>
        <p>
            <strong>Sexo:</strong> <?php echo @$_GET['sexo']; ?>
        </p>
        <p>
            <strong>Celular:</strong> <?php echo @$_GET['telefone']; ?>
        </p>
        <p>
            <strong>E-mail:</strong> <?php echo @$_GET['email']; ?>
        </p>
        <p>
            <strong>Preferências:</strong><?php echo implode("</br>", $_GET['preferencias']);?>
        </p>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        * {
            margin: 0;
            padding: 10px;
            font-family: Tahoma, sans-serif;
        }
        
        body {
            background: url('/imagens/darkstar_bg.png') no-repeat center;
            background-size: cover;
            background-attachment: fixed;
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
        <h1>PHP - Exercício 01</h1>
        <h2>Aprendendo a usar o echo:</h2>
        <p>Hoje é <?php echo date ('d/m/Y')?>.</p>
        <p>Agora são, exatamente <?php echo date ('h:i')?> da tarde. </p>
        <p> 5 + 15 / 3 = <?php echo (5+15/3)?></p>
    </div>
</body>
</html>
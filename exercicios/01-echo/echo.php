<?php
$nome = "Melissa";
$idade = date('Y') - 1992;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
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
            padding: auto;
            margin: auto;
            background-color: whitesmoke;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 15px;
            box-shadow: 2px 2px 5px black;
            list-style-position: inside;
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
        <h1>PHP - Exercício 02</h1>
        <h2>Alguns dados sobre mim, usando o comando echo:</h2>
        <ul>
            <li>Meu nome é <?php echo "$nome!"?></li>
            <li>Há 5 anos, eu tinha <?php echo ($idade - 5) . " anos."?></li>
            <li>Hoje é dia <?php echo date('d')?> do mês <?php echo date('m')?> de <?php echo date('Y')?>, e agora são <?php echo date('h:i')?>.</li>
            <li>Em 7 dias, será <?php echo date('d/m/Y', strtotime('+7 days'))?>.</li>
        </ul>
    </div>
</body>

</html>
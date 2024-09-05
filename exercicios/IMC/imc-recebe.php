<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
</head>
<body>
    <header>
        <h2>
        O seu IMC é 
        <?php 
        $p = $_GET['peso'];
        $a = $_GET['altura'];
        echo number_format($p / ($a ** 2),2);
        ?>
        </h2>
    </header>
    <main>
        <p>Já sabe né? Vai malhar minha filha.</p>
    </main>
</body>
</html>
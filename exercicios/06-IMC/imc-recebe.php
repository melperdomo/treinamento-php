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
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        echo number_format($peso / ($altura ** 2),2);
        ?>
        </h2>
    </header>
    <main>
        <p>Já sabe né? Vai malhar minha filha.</p>
    </main>
</body>
</html>
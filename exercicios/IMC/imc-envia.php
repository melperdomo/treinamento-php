<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
</head>

<body>
    <header>
        <h1>Calcule o seu IMC!</h1>
    </header>
    <main>
        <form>
            <p>
                <label for="peso">Qual é o seu peso?</label>
                <input type="number" name="peso" id="peso" step="0.01" placeholder="00.0"> Kg
            </p>

            <p>
                <label for="altura">Informe a sua altura:</label>
                <input type="number" name="altura" id="altura" step="0.01" placeholder="0.00"> cm
            </p>

            <button type="submit">Enviar Dados</button>
        </form>

        <h2>
            O seu IMC é: </br>
            <?php
            $peso = $_GET['peso'] ?? '0'; // ?? ou pega isso, ou pega aquilo (se não houver valor no GET, ele coloca outra coisa, e dispensa o uso do @)
            $altura = $_GET['altura'] ?? '0';
            $imc = 0;

            if (empty($peso) || empty($altura)) {
                echo "Para calcular, informe o seu peso e altura.";
            } else {
                $imc = $peso / ($altura ** 2);
                echo number_format($imc, 1, ',');
            }
            ?>
        </h2>

        <div class="resultados">
            <?php
                if ($imc > 0 && $imc < 18.5) : ?>
                <h3>Abaixo do Peso (IMC abaixo de 18,5)</h3>
                <p>É provável que o indivíduo possa estar enfrentando uma carência nutricional e riscos de saúde associados à desnutrição. </br>Caso seu peso esteja dentro dessa categoria, é fundamental buscar aconselhamento médico e nutricional para avaliar a causa e ganhar peso de maneira saudável.</p>
            
                <?php elseif ($imc >= 18.5 && $imc <= 24.9) : ?>
                <h3>Peso Normal (IMC entre 18,5 e 24,9)</h3>
                <p>Essa é a faixa considerada de peso ideal e está associada ao menor risco de doenças crônicas e complicações de saúde. </br>Por ser o peso ideal, é importante manter-se dentro dessa faixa para desfrutar de uma saúde equilibrada.</p>

                <?php elseif ($imc >= 25 && $imc <= 29.9) : ?>
                <h3>Sobrepeso (IMC entre 25 e 29,9)</h3>
                <p>Ainda abaixo da categoria da obesidade, o sobrepeso pode aumentar o risco de desenvolvimento de condições como diabetes tipo 2, hipertensão e doenças cardíacas. </br>Para isso, é essencial adotar hábitos alimentares saudáveis e incorporar atividade física regular para reduzir os riscos à saúde.</p>

                <?php elseif ($imc >= 30 && $imc <= 34.9) : ?>
                <h3>Obesidade (IMC entre 30 e 34,9)</h3>
                <p>A preocupação começa a ficar um pouco maior nessa categoria. Isso porque a obesidade pode acarretar uma série de problemas de saúde, incluindo doenças cardiovasculares, problemas respiratórios e articulares. </br>Nessa faixa, é crucial buscar apoio médico e implementar mudanças no estilo de vida para alcançar um peso mais saudável.</p>
            
                <?php elseif ($imc >= 35 && $imc<= 39.9) : ?>
                <h3>Obesidade Grau II (IMC entre 35 e 39,9)</h3>
                <p>Já na obesidade grau II, os riscos à saúde são significativamente elevados, e a possibilidade de desenvolver diabetes tipo 2, apneia do sono e outras condições graves é maior. </br>A intervenção médica e mudanças sustentáveis no estilo de vida são fundamentais para melhorar a saúde.</p>

                <?php elseif ($imc > 40) : ?>
                <h3>Obesidade Grau III (IMC acima de 40) ou obesidade mórbida</h3>
                <p>Essa faixa apresenta riscos extremamente graves à saúde. </br>Suas complicações podem incluir problemas cardíacos graves, dificuldades respiratórias e maior suscetibilidade a infecções.</p>
                <?php endif; 
            ?>
        </div>

    </main>
    <footer>
        <p><strong>Lembre-se:</strong> Pressões estéticas impostas pela sociedade não devem ser levadas em conta para definir a sua qualidade de vida e bem-estar. </p>
        <h4>Realize atividades físicas, busque auxílio médico e faça exames regularmente.</h4>
    </footer>
</body>
</html>
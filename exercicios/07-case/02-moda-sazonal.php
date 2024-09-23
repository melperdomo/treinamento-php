<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moda com CASE</title>
</head>
<body>
    <fieldset>
        <legend>Escolha a estação:</legend>
        <form action="">
            <select name="estacao" id="estacao">
                <option value=""></option>
                <option value="primavera">Primavera</option>
                <option value="verao">Verão</option>
                <option value="outono">Outono</option>
                <option value="inverno">Inverno</option>
            </select>
            <button type="submit">Ver looks</button>
        </form>
    </fieldset>
    <fieldset>
        <legend> Que tal estes? </legend>
        <?php switch ($_GET['estacao'] ?? ''):
            case "primavera": ?>
                <img src="https://i.pinimg.com/736x/c5/f7/17/c5f717231e713035661280b6fed48669.jpg" alt="">
                <img src="https://i.pinimg.com/564x/8a/71/7d/8a717d031f5cdd469bd9fbec9189261c.jpg" alt="">
                <img src="https://i.pinimg.com/474x/12/91/15/129115347d1d60ccda5d39c1151eab97.jpg" alt="">
            <?php break;
            case "verao": ?>
                <img src="https://static.stealthelook.com.br/wp-content/uploads/2021/10/looks-para-trabalhar-nos-dias-quentes-de-verao-5-20211007163117.png" alt="">
                <img src="https://i.pinimg.com/736x/05/50/34/05503457b62ddf8b2a0577de24186653.jpg" alt="">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiVahfEsfUsFzNTUACd81SAs2q3hymL5ePmJ1_KvMlA7jm9Wt_VCx45XYCVk64lSMIjngYFXr1d8Yq6ukE44i_QKhZNnBSrp8P2MGgCshH5eIKbOW0dTBnM2apQq4Q7jFexsZ1YdC3Qjvgi/s705/look+de+ver%25C3%25A3o+1.jpg" alt="">
            <?php break;
            case "outono": ?>
                <img src="https://tudocommoda.com/wp-content/uploads/2020/05/estilo-alternativo-feminino.jpg" alt="">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjEN9r4rxDbXC9h9x1IlGCIAmTKSBzS-YR6eJJDrzxbw5TJCj0G38AOQ0QLN61HQTFMhxQkHOiv0C7d48OlOCrVIQZin3_Snn2SjaYhxtjLftrSbMD_NW3lMyq4zuZ9uYEdbr9faUugotvYfy7iWi9sZ0Ueret7aypIfYIJ-jYmJVckaPZQVbP1W6QcEQ/s847/Para%20usar%20muito%20no%20outono%20saia%20e%20su%C3%A9ter%202.jpg" alt="">
                <img src="https://i.pinimg.com/474x/24/05/bc/2405bc4dd03059de0268129dfe78a8ba.jpg" alt="">
            <?php break;
            case "inverno": ?>
                <img src="https://i.pinimg.com/564x/ea/f4/f9/eaf4f9473e22349ce545904b9443e4d5.jpg" alt="">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgOJjnh3Tw1yJoiqJ-Ww8wJ2H27_cuiVHsosZeKFd3pwVUsHDGogcMBRHeS-TPcLDm5htG_b8N86i6PRhLY3FgE5h1KKPRg0q5I8qElxltQ2NPOPXIi5psHH--tu-rRwR53oXGPACe82VVkMXKuSBiaMzUyD1EO8Pr9n5KtxVKCGBJtOLN3AeCzDWWB8A/s683/Como%20usar%20blazer%20nos%20looks%20de%20inverno.jpg" alt="">
                <img src="https://i.pinimg.com/236x/87/98/99/8798995fa6233ec4bd68bba62a49f59b.jpg" alt="">
            <?php break; ?>
        <?php endswitch; ?>
    </fieldset>
</body>
</html>
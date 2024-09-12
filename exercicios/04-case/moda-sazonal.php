<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moda com CASE</title>
</head>
<body>
    <fieldset>
        <legend>Para qual estação você quer uma dica de look?</legend>
        <form action="">
            <select name="estacao" id="estacao">
                <option value=""></option>
                <option value="primavera">Primavera</option>
                <option value="verao">Verão</option>
                <option value="outono">Outono</option>
                <option value="inverno">Inverno</option>
            </select>
            <button type="submit">Ver sugestões</button>
        </form>
    </fieldset>
    <fieldset>
        <legend> Que tal estas combinações: </legend>
        <?php switch ($_GET['estacao'] ?? ''): ?>
            <?php case "primavera": ?>
                <img src="https://i.pinimg.com/736x/c5/f7/17/c5f717231e713035661280b6fed48669.jpg" alt="">
                <img src="https://i.pinimg.com/736x/44/11/3d/44113d88de14534bdb475e332888d6a8.jpg" alt="">
                <img src="https://i.pinimg.com/564x/b4/c1/0b/b4c10b1e15622cf776601084fb2b08da.jpg" alt="">
            <?php break; ?>
            <?php case "verao": ?>
                <img src="https://static.stealthelook.com.br/wp-content/uploads/2021/10/looks-para-trabalhar-nos-dias-quentes-de-verao-5-20211007163117.png" alt="">
                <img src="https://i.pinimg.com/originals/02/ac/05/02ac05efd57add2e0cdf1c352466f78b.jpg" alt="">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiVahfEsfUsFzNTUACd81SAs2q3hymL5ePmJ1_KvMlA7jm9Wt_VCx45XYCVk64lSMIjngYFXr1d8Yq6ukE44i_QKhZNnBSrp8P2MGgCshH5eIKbOW0dTBnM2apQq4Q7jFexsZ1YdC3Qjvgi/s705/look+de+ver%25C3%25A3o+1.jpg" alt="">
            <?php break; ?>
            <?php case "outono": ?>
                <img src="https://tudocommoda.com/wp-content/uploads/2020/05/estilo-alternativo-feminino.jpg" alt="">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjEN9r4rxDbXC9h9x1IlGCIAmTKSBzS-YR6eJJDrzxbw5TJCj0G38AOQ0QLN61HQTFMhxQkHOiv0C7d48OlOCrVIQZin3_Snn2SjaYhxtjLftrSbMD_NW3lMyq4zuZ9uYEdbr9faUugotvYfy7iWi9sZ0Ueret7aypIfYIJ-jYmJVckaPZQVbP1W6QcEQ/s847/Para%20usar%20muito%20no%20outono%20saia%20e%20su%C3%A9ter%202.jpg" alt="">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjpNM7bmv252t9b3Gd53X8DB4IYAFcAKwF4-BoBCkHRjM-czBpFw2uT9b2D48HoYXqrJwSHP_3Wh4EQkeXWBuBNqU14hQP3Y5gC-5wNO26aPwbv7uWgTMbeeS9vHe4EBpBo2Jia_xp6o-O0-voZXD6ppWPEfxzH0es34i-_DjHxHwxoBYqu3rKx4ti9yg/w1200-h630-p-k-no-nu/looks%20para%20usar%20no%20outono.jpg" alt="">
            <?php break; ?>
            <?php case "inverno": ?>
                <img src="https://i.pinimg.com/564x/ea/f4/f9/eaf4f9473e22349ce545904b9443e4d5.jpg" alt="">
                <img src="https://quadrofeminino.com/wp-content/uploads/2023/08/looks-motociclista-feminino.jpg" alt="">
                <img src="https://i.pinimg.com/236x/87/98/99/8798995fa6233ec4bd68bba62a49f59b.jpg" alt="">
            <?php break; ?>
        <?php endswitch; ?>
    </fieldset>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array DDI dos Países</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>Aqui estão 5 países excelentes para morar e trabalhar como programador:</h2>
    
    <?php 
    $paises = [
        [
            'pais' => 'Chile',
            'ddi' => '+56',
        ],
        [
            'pais' => 'Canadá',
            'ddi' => '+1',
        ],
        [
            'pais' => 'Portugal',
            'ddi' => '+351',
        ],
        [
            'pais' => 'Espanha',
            'ddi' => '+34',
        ],
        [
            'pais' => 'Irlanda',
            'ddi' => '+353',
        ],
        [
            'pais' => 'Reino Unido',
            'ddi' => '+44',
        ],
        [
            'pais' => 'Autrália',
            'ddi' => '+61',
        ],
        [
            'pais' => 'Nova Zelândia',
            'ddi' => '+64',
        ],
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>País</th>
                <th>DDI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $paises[0]['pais'];?></td>
                <td><?php echo $paises[0]['ddi'];?></td>
            </tr>
            <tr>
                <td><?php echo $paises[1]['pais'];?></td>
                <td><?php echo $paises[1]['ddi'];?></td>
            </tr>
            <tr>
                <td><?php echo $paises[2]['pais'];?></td>
                <td><?php echo $paises[2]['ddi'];?></td>
            </tr>
            <tr>
                <td><?php echo $paises[3]['pais'];?></td>
                <td><?php echo $paises[3]['ddi'];?></td>
            </tr>
            <tr>
                <td><?php echo $paises[4]['pais'];?></td>
                <td><?php echo $paises[4]['ddi'];?></td>
            </tr>
            <tr>
                <td><?php echo $paises[5]['pais'];?></td>
                <td><?php echo $paises[5]['ddi'];?></td>
            </tr>
            <tr>
                <td><?php echo $paises[6]['pais'];?></td>
                <td><?php echo $paises[6]['ddi'];?></td>
            </tr>
            <tr>
                <td><?php echo $paises[7]['pais'];?></td>
                <td><?php echo $paises[7]['ddi'];?></td>
            </tr>
        </tbody>
    </table>
    <p>Beautiful, congrats! &#128526</p>
</body>

</html>
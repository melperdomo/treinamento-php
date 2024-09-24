<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 8px 16px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Exercício 03</h3>
    <p>Mostre os clientes do array abaixo dentro de uma tabela:</p>
    <?php
    $clients = [
        [
            "name" => "Alice Johnson",
            "email" => "alice.johnson@example.com",
            "cellphone" => "555-1234"
        ],
        [
            "name" => "Bob Smith",
            "email" => "bob.smith@example.com",
            "cellphone" => "555-5678"
        ],
        [
            "name" => "Charlie Brown",
            "email" => "charlie.brown@example.com",
            "cellphone" => "555-8765"
        ],
        [
            "name" => "David Wilson",
            "email" => "david.wilson@example.com",
            "cellphone" => "555-4321"
        ],
        [
            "name" => "Eve Davis",
            "email" => "eve.davis@example.com",
            "cellphone" => "555-6789"
        ]
    ];
    ?>
    <table>
        <th>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </th>
        <?php foreach ($clients as $cl): ?>
            <tb>
                <tr>
                    <td> <?php echo $cl['name']; ?> </td>
                    <td> <?php echo $cl['email']; ?> </td>
                    <td> <?php echo $cl['cellphone']; ?> </td>
                </tr>
            </tb>
        <?php endforeach; ?>
    </table>

</body>

</html>
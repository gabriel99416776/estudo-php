<?php
$dados = [
    ['Joao', 25, 'Masculino'],
    ['Maria', 30, 'Feminino'],
    ['Pedro', 28, 'Masculino'],
    ['Ana', 22, 'Feminino'],
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $linha) : ?>
                <tr>
                    <td><?php echo $linha[0]; ?></td>
                    <td><?php echo $linha[1]; ?></td>
                    <td><?php echo $linha[2]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
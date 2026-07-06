<h1>
    Ola asd dasdasd
</h1>
<?php

$nomes = [
    ['Joao', 25, 'Masculino'],
    ['Maria', 30, 'Feminino'],
    ['Pedro', 28, 'Masculino'],
    ['Ana', 22, 'Feminino']
];


?>

table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Sexo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($nomes as $linha) : ?>
            <tr>
                <td><?php echo $linha[0]; ?></td>
                <td><?php echo $linha[1]; ?></td>
                <td><?php echo $linha[2]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
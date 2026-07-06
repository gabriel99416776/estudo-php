<?php
// Utilizando ECHO para exibir informações na tela
$nome = "João";
$idade = 25;
$cidade = "São Paulo";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nome: <?php echo $nome . ' ' . $idade ?></p>

    <p>Cidade: <?php print $cidade ?></p>
</body>
</html>
<?php
$nomes = ["Gabriel", "João", "Mario"];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- USANDO SOMENTE O PHP -->
    <?php
    for ($i = 100; $i < 120; $i++) {
        echo "<p>O valor de i é: $i</p>";
    }
    ?>

    <hr>

    <!-- USANDO HTML + PHP -->
    <?php
    for ($i = 100; $i < 120; $i++) {
    ?>
        <p><?= $i ?></p>
    <?php
    }
    ?>




    <!-- FOREACH SOMENTE PHP -->
    <?php
    echo '<ul>';
    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    echo '</ul>';
    ?>

    <!-- FOREACH HTML + PHP -->
    <ul>
        <?php
        foreach ($nomes as $nome) :

        ?>
            <li><?= $nome ?></li>
        <?php
        endforeach;
        ?>
    </ul>
</body>

</html>
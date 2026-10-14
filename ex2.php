<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tabpays1 = ["Tunisie", "France", "Italie", "Allemagne", "Espagne"];
    $tabpays2 = [
        "Tunis"  => "Tunisie",
        "Paris"  => "France",
        "Rome"   => "Italie",
        "Berlin" => "Allemagne",
        "Madrid" => "Espagne"];
    ?>
    <h2>Tableau tabpays1</h2>
    <?php
    foreach ($tabpays1 as $i => $pays) {
        ?><br><?=$i?> :  <?=$pays?><br><?php
    }
    ?>
    <h3>ordre alphabétique croissant </h3>
    <?php
    $t1 = $tabpays1;
    sort($t1);
    foreach ($t1 as $pays) {
        ?> <?= $pays ?> <br><?php
    }
    ?>
    <h3>ordre alphabétique décroissant </h3>
    <?php
    $t2 = $tabpays1;
    rsort($t2);
    foreach ($t2 as $pays) {
        ?> <?= $pays ?> <br><?php
    }
    ?>
    <h2>Tableau tabpays2</h2>
    <?php
    foreach ($tabpays2 as $capitale => $pays) {
        ?><?= $capitale ?> => <?= $pays ?><br><?php
    }
    ?>
    <h3>tri croissant des valeurs </h3>
    <?php
    $t3 = $tabpays2;
    asort($t3);
    foreach ($t3 as $capitale => $pays) {
        ?><?= $capitale ?> => <?= $pays ?><br><?php
    }
    ?>
    <h3>tri décroissant des valeurs</h3>
    <?php
    $t4 = $tabpays2;
    arsort($t4);
    foreach ($t4 as $capitale => $pays) {
        ?><?= $capitale ?> => <?= $pays ?><br><?php
    }
    ?>
    <h3>tri croissant des indices </h3>
    <?php
    $t5 = $tabpays2;
    ksort($t5);
    foreach ($t5 as $capitale => $pays) {
        ?><?= $capitale ?> => <?= $pays ?><br><?php
    }
    ?>
    <h3>tri décroissant des indices </h3>
    <?php
    $t6 = $tabpays2;
    krsort($t6);
    foreach ($t6 as $capitale => $pays) {
        ?><?= $capitale ?> => <?= $pays ?><br><?php
    }
    ?>
    <h3>tabpays1</h3>
    <table border="1">
        <tr><th>Indice</th><th>Pays</th></tr>
        <?php
        foreach ($tabpays1 as $i => $pays) {
            ?>
            <tr><td><?=$i?></td><td><?=$pays?></td></tr>
            <?php
        }
        ?>
    </table>
    <h3>tabpays2</h3>
    <table border="1">
        <tr><th>Capitale</th><th>Pays</th></tr>
        <?php
        foreach ($tabpays2 as $capitale => $pays) {
            ?>
            <tr><td><?=$capitale?></td><td><?=$pays?></td></tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
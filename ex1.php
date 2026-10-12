<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container my-4">
<?php
echo "<h2>1. Étudiants ayant une note >= 10</h2>";
$Notes = [
    "Rami" => 7.50,
    "Mohamed" => 19.00,
    "Amira" => 15.50,
    "Asma" => 10.00,
    "Ahmed" => 9.50,
    "Yassine" => 15.50,
    "Islem" => 12.00
];
foreach ($Notes as $nom => $note) {
    if ($note >= 10) {
    ?>
        <p><?php echo $nom . " : " . $note; ?></p>
    <?php
    }
}
echo "<h2>2. Nombre d'étudiants</h2>";

echo count($Notes);

echo "<h2>3. étudiant ayant une bonne note</h2>";
$meil = max($Notes);
$n = array_keys($Notes, $meil);
foreach ($n as $nom) {
    echo "<p>$nom : $meil</p>";
}
?>
<table border="1">
<tr>
    <th>Nom</th>
    <th>Note En PHP</th>
</tr>
<?php
echo "<h2>4. Liste des étudiants et leurs notes</h2>";
foreach ($Notes as $nom => $note) {
    ?>
    <tr>
        <td><?= $nom; ?></td>
        <td><?= $note; ?></td>
    </tr>
    <?php
}
?>
</table>
<?php
echo "<h2>5. Tri tableau selon un ordre croissant</h2>";
asort($Notes);
print_r($Notes);
echo "<h2>6. Tri tableau selon un ordre decroissant selon les noms</h2>";
krsort($Notes);
print_r($Notes);
?>
<h2>7. Moyenne des notes en PHP</h2>
<p><?php echo array_sum($Notes) / count($Notes); ?></p>
<h2>8. Table Bootstrap </h2>
<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Note En PHP</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Notes as $nom => $note) { ?>
        <tr>
            <td><?= $nom; ?></td>
            <td><?= $note; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</body>
</html>
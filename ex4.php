<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        Chaîne de caractères : <input type="text" name="chaine"><br>
        Position de départ : <input type="number" name="debut"><br>
        Longueur : <input type="number" name="longueur"><br>
        <input type="submit" name="b1" value="Valider">
    </form>
    <?php
    if (isset($_POST['b1'])){
        $chaine = $_POST['chaine'];
        $debut = $_POST['debut'];
        $longueur = $_POST['longueur'];
        if ($chaine != '' && $debut != '' && $longueur != ''){
            ?>
            <h3>Chaîne saisie</h3>
            <?=$chaine?><br>
            <h3>Longueur de la chaîne</h3>
            <?=strlen($chaine)?><br>
            <h3>Sous-chaîne</h3>
            <?=substr($chaine, $debut, $longueur)?><br>
            <h3>Chaîne inversée</h3>
            <?php
            $inverse = "";
            for ($i = strlen($chaine)-1;$i>=0;$i--) {
                $inverse .= $chaine[$i];
            }
            ?>
            <?=$inverse?><br>
            <?php
        }else{
            ?><script>alert("Veuillez remplir tous les champs")</script><?php
        }
    }
    ?>
</body>
</html>
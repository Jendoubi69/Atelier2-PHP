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
        <input type="submit" name="b1" value="Valider">
    </form>
    <?php
    if (isset($_POST['b1'])){
        $chaine = trim($_POST['chaine']);
        if ($chaine != ''){
            $mots = explode(" ", $chaine);
            $ch= "";
            foreach ($mots as $mot) {
                if ($mot != ''){
                    $ch .= strtoupper($mot[0]);
                }
            }
            ?>
            <h3>En entrée</h3>
            <?=$chaine?><br>
            <h3>Affichage</h3>
            <?=$ch?><br>
            <?php
        }else{
            ?><script>alert("Veuillez remplir tous les champs")</script><?php
        }
    }
    ?>
</body>
</html>
<?php
$TAB = [
    "t1" => "Atelier N°2",
    "t2" => "Bonjour Tout le monde",
    "t3" => "Vous êtes les bienvenus"
];
$JSON = json_encode($TAB, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo $JSON."\n" ;
if (str_contains($JSON, "Bonjour")) {
    echo "Le mot Bonjour est bien dans la chaîne \n" ;
} else {
    echo "Le mot Bonjour n'est pas dans la chaîne \n";
}
?>
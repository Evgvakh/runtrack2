<?php 

$str = "Dans l'espace, personne ne vous entend crier";
$counter = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if(isset($str[$i])) {
        $counter++;
    }
}

echo "Il y a ".$counter. " caractères dans la phrase";
?>
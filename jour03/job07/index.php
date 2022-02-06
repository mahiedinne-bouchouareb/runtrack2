<?php

$phrase         = "Certaines choses changent, et d'autres ne changeront jamais.";
$nouvellePhrase = "";
$longueurPhrase = strlen($phrase);
for ($i = 0; $i < $longueurPhrase; $i++) {
    if ($i == $longueurPhrase - 1) {
        $nouvellePhrase .= $phrase[0];
    } else {
        $nouvellePhrase .= $phrase[$i + 1];
    }
}

echo $nouvellePhrase;

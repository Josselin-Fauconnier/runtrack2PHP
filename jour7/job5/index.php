
<?php

function occurrences($str, $char) {
    $compte = 0;

    // Parcours de la chaîne caractère par caractère
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $compte++;
        }
    }

    // Retour du résultat
    return $compte;
}

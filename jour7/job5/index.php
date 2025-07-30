<?php

function occurrences($str, $char) {
    $compte = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $compte++;
        }
    }

    return $compte;
}
